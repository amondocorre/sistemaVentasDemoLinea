<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-04-29 22:44:54 --> Query error: Table 'sistema_ventas.svf_usuarios' doesn't exist in engine - Invalid query: SELECT *
FROM `svf_usuarios`
WHERE `id` = '1'
AND `refresh_token` = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzaXN0ZW1hLXZlbnRhcy1hcGkiLCJhdWQiOiJzaXN0ZW1hLXZlbnRhcy1hcHAiLCJpYXQiOjE3NzY5OTgxMjAsImV4cCI6MTc3OTU5MDEyMCwidHlwZSI6InJlZnJlc2giLCJ1c2VyX2lkIjoiMSIsImp0aSI6ImFiZWVhOWZkNWI1NDExOWFlMWExY2M2NDgyZGZlMThjIn0.v9Uwh2-hvsi3V4IC_H-LrZNRjegS8xSWxSousrF0DV4'
AND `refresh_token_expires` > '2026-04-29 22:44:54'
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-04-29 22:44:54 --> Query error: Table 'sistema_ventas.svf_usuarios' doesn't exist in engine - Invalid query: SELECT *
FROM `svf_usuarios`
WHERE `id` = '1'
AND `refresh_token` = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzaXN0ZW1hLXZlbnRhcy1hcGkiLCJhdWQiOiJzaXN0ZW1hLXZlbnRhcy1hcHAiLCJpYXQiOjE3NzY5OTgxMjAsImV4cCI6MTc3OTU5MDEyMCwidHlwZSI6InJlZnJlc2giLCJ1c2VyX2lkIjoiMSIsImp0aSI6ImFiZWVhOWZkNWI1NDExOWFlMWExY2M2NDgyZGZlMThjIn0.v9Uwh2-hvsi3V4IC_H-LrZNRjegS8xSWxSousrF0DV4'
AND `refresh_token_expires` > '2026-04-29 22:44:54'
ERROR - 2026-04-29 22:45:01 --> Query error: Table 'sistema_ventas.svf_usuarios' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-04-29 22:59:50 --> Query error: Table 'sistema_ventas.svf_usuarios' doesn't exist in engine - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
