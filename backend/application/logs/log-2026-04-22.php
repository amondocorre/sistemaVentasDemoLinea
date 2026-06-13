<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-04-22 06:54:36 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 06:54:36 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 06:54:39 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 06:54:39 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 06:54:39 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 06:54:39 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:10 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:10 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:15 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:15 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:15 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:15 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:15 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:15 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:20 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:20 --> Query error: Table 'sistema_ventas.ventas' doesn't exist - Invalid query: 
            SELECT
                t.metodo_id,
                t.metodo_pago,
                t.metodo_tipo,
                SUM(t.cantidad) as cantidad,
                SUM(t.total) as total
            FROM (
                SELECT
                    v.id_metodo_pago as metodo_id,
                    COALESCE(mp.nombre, 'Sin método') as metodo_pago,
                    COALESCE(mp.tipo, '') as metodo_tipo,
                    COUNT(v.id) as cantidad,
                    COALESCE(SUM(v.total), 0) as total
                FROM ventas v
                LEFT JOIN metodos_pago mp ON mp.id = v.id_metodo_pago
                WHERE v.estado = 'completada'
                  AND v.tipo_venta = 'contado'
                  AND v.id_sucursal = 1
                  AND v.id_usuario = 1
                   AND v.fecha_venta >= '2025-12-19 18:23:27' AND v.fecha_venta <= '2026-04-22 07:29:20'
                GROUP BY v.id_metodo_pago

                UNION ALL

                SELECT
                    vc.id_metodo_pago as metodo_id,
                    COALESCE(mp.nombre, 'Sin método') as metodo_pago,
                    COALESCE(mp.tipo, '') as metodo_tipo,
                    COUNT(vc.id) as cantidad,
                    COALESCE(SUM(vc.monto), 0) as total
                FROM ventas_cobros vc
                INNER JOIN ventas v ON v.id = vc.id_venta
                LEFT JOIN metodos_pago mp ON mp.id = vc.id_metodo_pago
                WHERE v.id_sucursal = 1
                  AND vc.id_usuario = 1
                   AND vc.created_at >= '2025-12-19 18:23:27' AND vc.created_at <= '2026-04-22 07:29:20'
                GROUP BY vc.id_metodo_pago
            ) t
            GROUP BY t.metodo_id, t.metodo_pago, t.metodo_tipo
            ORDER BY total DESC
        
ERROR - 2026-04-22 07:29:35 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 07:29:35 --> Query error: Table 'sistema_ventas.ventas' doesn't exist - Invalid query: 
            SELECT
                t.metodo_id,
                t.metodo_pago,
                t.metodo_tipo,
                SUM(t.cantidad) as cantidad,
                SUM(t.total) as total
            FROM (
                SELECT
                    v.id_metodo_pago as metodo_id,
                    COALESCE(mp.nombre, 'Sin método') as metodo_pago,
                    COALESCE(mp.tipo, '') as metodo_tipo,
                    COUNT(v.id) as cantidad,
                    COALESCE(SUM(v.total), 0) as total
                FROM ventas v
                LEFT JOIN metodos_pago mp ON mp.id = v.id_metodo_pago
                WHERE v.estado = 'completada'
                  AND v.tipo_venta = 'contado'
                  AND v.id_sucursal = 1
                  AND v.id_usuario = 1
                   AND v.fecha_venta >= '2025-12-19 18:23:27' AND v.fecha_venta <= '2026-04-22 07:29:35'
                GROUP BY v.id_metodo_pago

                UNION ALL

                SELECT
                    vc.id_metodo_pago as metodo_id,
                    COALESCE(mp.nombre, 'Sin método') as metodo_pago,
                    COALESCE(mp.tipo, '') as metodo_tipo,
                    COUNT(vc.id) as cantidad,
                    COALESCE(SUM(vc.monto), 0) as total
                FROM ventas_cobros vc
                INNER JOIN ventas v ON v.id = vc.id_venta
                LEFT JOIN metodos_pago mp ON mp.id = vc.id_metodo_pago
                WHERE v.id_sucursal = 1
                  AND vc.id_usuario = 1
                   AND vc.created_at >= '2025-12-19 18:23:27' AND vc.created_at <= '2026-04-22 07:29:35'
                GROUP BY vc.id_metodo_pago
            ) t
            GROUP BY t.metodo_id, t.metodo_pago, t.metodo_tipo
            ORDER BY total DESC
        
ERROR - 2026-04-22 08:15:33 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:15:53 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:15:53 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:03 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:03 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:03 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:03 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:03 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:03 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:05 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:05 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:07 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:07 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:07 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:07 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:09 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:09 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:10 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:10 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:10 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:10 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:18 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:18 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:18 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:17:18 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:12 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:12 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:12 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:12 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:12 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:12 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:17 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:22 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:22 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:22 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:59 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:25:59 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:26:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:26:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:26:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:26:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:26:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:26:06 --> Could not find the specified $config['composer_autoload'] path: C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\vendor/autoload.php
ERROR - 2026-04-22 08:28:47 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:28:47 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:28:47 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:28:47 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:28:47 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:28:47 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:28:54 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:28:54 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:28:54 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:10 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:10 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:10 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:12 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:12 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:12 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:16 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:16 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:16 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:16 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:16 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:16 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:19 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:19 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:19 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:29 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Ventas.php 375
ERROR - 2026-04-22 08:30:29 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Ventas.php 375
ERROR - 2026-04-22 08:30:29 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:29 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:29 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:29 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:36 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:36 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:36 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:36 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:36 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:36 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:40 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Caja.php 195
ERROR - 2026-04-22 08:30:40 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:40 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:49 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Ventas.php 375
ERROR - 2026-04-22 08:30:49 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Ventas.php 375
ERROR - 2026-04-22 08:30:49 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:49 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:49 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:49 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:58 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Ventas.php 375
ERROR - 2026-04-22 08:30:58 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\controllers\api\Ventas.php 375
ERROR - 2026-04-22 08:30:58 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:58 --> Severity: Warning --> include(C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:58 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 08:30:58 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\errors\html\error_exception.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\core\Exceptions.php 220
ERROR - 2026-04-22 09:24:46 --> Query error: Unknown column 'c.nit' in 'field list' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `s`.`direccion` as `sucursal_direccion`, `s`.`ciudad` as `sucursal_ciudad`, `s`.`formato_impresion` as `sucursal_formato`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`, `c`.`nit` as `cliente_nit`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE `v`.`id` = 75
