<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!defined('DB_PREFIX')) {
    define('DB_PREFIX', 'svf_');
}

$active_group = 'default';
$query_builder = TRUE;

// Detectar si estamos ejecutando en local (localhost) o en línea (producción)
$is_local = TRUE;
if (isset($_SERVER['HTTP_HOST'])) {
    $is_local = in_array($_SERVER['HTTP_HOST'], array('localhost', '127.0.0.1', '::1'), TRUE);
} elseif (defined('STDIN')) {
    $is_local = (defined('ENVIRONMENT') && ENVIRONMENT === 'development');
}

$db_host = 'localhost';
$db_user = $is_local ? 'root' : 'vanguard_admin';
$db_pass = $is_local ? '' : 'Ariana.2107';
$db_name = $is_local ? 'sistema_ventas' : 'vanguard_sistema_ventas';

$db['default'] = array(
    'dsn'          => '',
    'hostname'     => $db_host,
    'username'     => $db_user,
    'password'     => $db_pass,
    'database'     => $db_name,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => DB_PREFIX,
    'pconnect'     => FALSE,
    'db_debug'     => (ENVIRONMENT !== 'production'),
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8mb4',
    'dbcollat'     => 'utf8mb4_unicode_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);
