<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-05-05 12:18:02 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 12:18:03 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 12:18:06 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 12:18:30 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 12:19:02 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 12:20:08 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 12:25:06 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 15:05:58 --> Query error: Unknown column 'v.id_cliente' in 'on clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:05:58 --> Query error: Unknown column 'v.id_cliente' in 'on clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:06:03 --> Query error: Unknown column 'v.id_cliente' in 'on clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:06:03 --> Query error: Unknown column 'v.id_cliente' in 'on clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:41:13 --> Query error: Unknown column 'v.id_cliente' in 'on clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:41:13 --> Query error: Unknown column 'v.id_cliente' in 'on clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:43:16 --> Query error: Unknown column 'v.tipo_venta' in 'where clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
AND `v`.`tipo_venta` = 'credito'
AND `v`.`estado_cobro` = 'pendiente'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:43:16 --> Query error: Unknown column 'v.tipo_venta' in 'where clause' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE DATE(v.fecha_venta) >= '2026-05-05'
AND DATE(v.fecha_venta) <= '2026-05-05'
AND `v`.`tipo_venta` = 'credito'
AND `v`.`estado_cobro` = 'pendiente'
ORDER BY `v`.`fecha_venta` DESC
 LIMIT 50
ERROR - 2026-05-05 15:48:51 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`sistema_ventas`.`svf_caja_turnos`, CONSTRAINT `fk_turnos_sucursales` FOREIGN KEY (`id_sucursal`) REFERENCES `svf_sucursales` (`id`) ON DELETE NO ACTION) - Invalid query: INSERT INTO `svf_caja_turnos` (`id_usuario`, `id_sucursal`, `monto_inicial`, `estado`, `fecha_apertura`, `created_at`) VALUES (1, 1, 0, 'abierto', '2026-05-05 15:48:51', '2026-05-05 15:48:51')
ERROR - 2026-05-05 15:56:28 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`id` = '1'
ERROR - 2026-05-05 15:56:28 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`id` = '1'
ERROR - 2026-05-05 15:56:33 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 15:56:39 --> Query error: Table 'sistema_ventas.svf_sucursales' doesn't exist - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-05-05 16:51:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`sistema_ventas`.`svf_ventas_detalle`, CONSTRAINT `fk_detalle_ventas` FOREIGN KEY (`id_venta`) REFERENCES `svf_ventas` (`id`) ON DELETE CASCADE) - Invalid query: INSERT INTO `svf_ventas_detalle` (`id_venta`, `id_producto`, `cantidad`, `precio_unitario`, `precio_compra`, `descuento`, `subtotal`, `created_at`) VALUES (1, '15', 1, 25, 20, 0, 25, '2026-05-05 16:51:31')
ERROR - 2026-05-05 16:51:35 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`sistema_ventas`.`svf_ventas_detalle`, CONSTRAINT `fk_detalle_ventas` FOREIGN KEY (`id_venta`) REFERENCES `svf_ventas` (`id`) ON DELETE CASCADE) - Invalid query: INSERT INTO `svf_ventas_detalle` (`id_venta`, `id_producto`, `cantidad`, `precio_unitario`, `precio_compra`, `descuento`, `subtotal`, `created_at`) VALUES (2, '15', 1, 25, 20, 0, 25, '2026-05-05 16:51:35')
ERROR - 2026-05-05 16:54:48 --> Query error: Unknown column 's.formato_impresion' in 'field list' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `s`.`direccion` as `sucursal_direccion`, `s`.`ciudad` as `sucursal_ciudad`, `s`.`formato_impresion` as `sucursal_formato`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`, `c`.`nit_ci` as `cliente_nit`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE `v`.`id` = 3
ERROR - 2026-05-05 16:57:15 --> Query error: Unknown column 's.formato_impresion' in 'field list' - Invalid query: SELECT `v`.*, `u`.`nombre` as `usuario`, `s`.`nombre` as `sucursal`, `s`.`direccion` as `sucursal_direccion`, `s`.`ciudad` as `sucursal_ciudad`, `s`.`formato_impresion` as `sucursal_formato`, `mp`.`nombre` as `metodo_pago`, `c`.`nombre` as `cliente`, `c`.`nit_ci` as `cliente_nit`
FROM `svf_ventas` `v`
LEFT JOIN `svf_usuarios` `u` ON `u`.`id` = `v`.`id_usuario`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `v`.`id_sucursal`
LEFT JOIN `svf_metodos_pago` `mp` ON `mp`.`id` = `v`.`id_metodo_pago`
LEFT JOIN `svf_clientes` `c` ON `c`.`id` = `v`.`id_cliente`
WHERE `v`.`id` = 4
