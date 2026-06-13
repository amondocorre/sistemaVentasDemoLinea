<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-05-14 22:12:17 --> Query error: Table 'sistema_ventas.ventas' doesn't exist - Invalid query: SELECT t.*, COALESCE(SUM(CASE WHEN mp.tipo = 'efectivo' THEN v.total ELSE 0 END), 0) as total_efectivo_ventas, COALESCE(SUM(COALESCE(v.monto_efectivo, 0)), 0) as total_efectivo_mixto
FROM `svf_caja_turnos` `t`
LEFT JOIN ventas v ON v.id_usuario = t.id_usuario AND v.id_sucursal = t.id_sucursal AND v.estado = 'completada' AND v.fecha_venta >= t.fecha_apertura AND v.fecha_venta <= t.fecha_cierre
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
WHERE `t`.`id_usuario` = 1
AND `t`.`id_sucursal` = 1
AND `t`.`estado` = 'cerrado'
GROUP BY `t`.`id`
ORDER BY `t`.`fecha_apertura` DESC
 LIMIT 50
ERROR - 2026-05-14 22:12:17 --> Query error: Table 'sistema_ventas.ventas' doesn't exist - Invalid query: SELECT t.*, COALESCE(SUM(CASE WHEN mp.tipo = 'efectivo' THEN v.total ELSE 0 END), 0) as total_efectivo_ventas, COALESCE(SUM(COALESCE(v.monto_efectivo, 0)), 0) as total_efectivo_mixto
FROM `svf_caja_turnos` `t`
LEFT JOIN ventas v ON v.id_usuario = t.id_usuario AND v.id_sucursal = t.id_sucursal AND v.estado = 'completada' AND v.fecha_venta >= t.fecha_apertura AND v.fecha_venta <= t.fecha_cierre
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
WHERE `t`.`id_usuario` = 1
AND `t`.`id_sucursal` = 1
AND `t`.`estado` = 'cerrado'
GROUP BY `t`.`id`
ORDER BY `t`.`fecha_apertura` DESC
 LIMIT 50
ERROR - 2026-05-14 22:12:37 --> Query error: Table 'sistema_ventas.ventas' doesn't exist - Invalid query: SELECT t.*, COALESCE(SUM(CASE WHEN mp.tipo = 'efectivo' THEN v.total ELSE 0 END), 0) as total_efectivo_ventas, COALESCE(SUM(COALESCE(v.monto_efectivo, 0)), 0) as total_efectivo_mixto
FROM `svf_caja_turnos` `t`
LEFT JOIN ventas v ON v.id_usuario = t.id_usuario AND v.id_sucursal = t.id_sucursal AND v.estado = 'completada' AND v.fecha_venta >= t.fecha_apertura AND v.fecha_venta <= t.fecha_cierre
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
WHERE `t`.`id_usuario` = 1
AND `t`.`id_sucursal` = 1
AND `t`.`estado` = 'cerrado'
GROUP BY `t`.`id`
ORDER BY `t`.`fecha_apertura` DESC
 LIMIT 50
ERROR - 2026-05-14 22:12:37 --> Query error: Table 'sistema_ventas.ventas' doesn't exist - Invalid query: SELECT t.*, COALESCE(SUM(CASE WHEN mp.tipo = 'efectivo' THEN v.total ELSE 0 END), 0) as total_efectivo_ventas, COALESCE(SUM(COALESCE(v.monto_efectivo, 0)), 0) as total_efectivo_mixto
FROM `svf_caja_turnos` `t`
LEFT JOIN ventas v ON v.id_usuario = t.id_usuario AND v.id_sucursal = t.id_sucursal AND v.estado = 'completada' AND v.fecha_venta >= t.fecha_apertura AND v.fecha_venta <= t.fecha_cierre
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
WHERE `t`.`id_usuario` = 1
AND `t`.`id_sucursal` = 1
AND `t`.`estado` = 'cerrado'
GROUP BY `t`.`id`
ORDER BY `t`.`fecha_apertura` DESC
 LIMIT 50
ERROR - 2026-05-14 22:37:18 --> Severity: Notice --> Undefined index: usuario C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\pdfs\cierre_caja.php 34
ERROR - 2026-05-14 22:37:18 --> Severity: Notice --> Undefined index: sucursal C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\pdfs\cierre_caja.php 35
ERROR - 2026-05-14 22:44:23 --> Severity: Notice --> Undefined index: usuario C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\pdfs\cierre_caja.php 34
ERROR - 2026-05-14 22:44:23 --> Severity: Notice --> Undefined index: sucursal C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\application\views\pdfs\cierre_caja.php 35
