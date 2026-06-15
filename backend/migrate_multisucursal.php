<?php
define('BASEPATH', __DIR__ . '/system/');
define('APPPATH', __DIR__ . '/application/');
define('ENVIRONMENT', 'development');

// Cargar la configuración de la base de datos
include(__DIR__ . '/application/config/database.php');

// Obtener los parámetros de conexión según el entorno de database.php
$config = $db[$active_group];
$host = $config['hostname'];
$user = $config['username'];
$pass = $config['password'];
$dbname = $config['database'];
$prefix = defined('DB_PREFIX') ? DB_PREFIX : $config['dbprefix'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    echo "Conectado exitosamente a la base de datos: $dbname\n";
    
    // 1. Crear tabla de relación muchos a muchos usuario_sucursales
    $tableName = $prefix . 'usuario_sucursales';
    $tableUsers = $prefix . 'usuarios';
    $tableBranches = $prefix . 'sucursales';
    
    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS `$tableName` (
        `id_usuario` INT(11) UNSIGNED NOT NULL,
        `id_sucursal` INT(11) UNSIGNED NOT NULL,
        PRIMARY KEY (`id_usuario`, `id_sucursal`),
        FOREIGN KEY (`id_usuario`) REFERENCES `$tableUsers`(`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    
    $pdo->exec($sqlCreateTable);
    echo "Tabla `$tableName` creada o ya existente.\n";
    
    // 2. Migrar relaciones existentes
    $sqlMigrate = "INSERT IGNORE INTO `$tableName` (id_usuario, id_sucursal)
                   SELECT id, id_sucursal FROM `$tableUsers` WHERE id_sucursal IS NOT NULL";
    $inserted = $pdo->exec($sqlMigrate);
    echo "Se migraron $inserted registros de usuarios existentes a la nueva tabla.\n";
    
    echo "Migración completada con éxito.\n";
} catch (PDOException $e) {
    echo "Error durante la migración: " . $e->getMessage() . "\n";
}
