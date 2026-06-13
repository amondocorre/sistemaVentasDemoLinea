<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-06-13 09:02:30 --> Query error: MySQL server has gone away - Invalid query: SELECT `u`.*, `r`.`nombre` as `rol`, `r`.`permisos`, `s`.`nombre` as `sucursal`
FROM `svf_usuarios` `u`
LEFT JOIN `svf_roles` `r` ON `r`.`id` = `u`.`id_rol`
LEFT JOIN `svf_sucursales` `s` ON `s`.`id` = `u`.`id_sucursal`
WHERE `u`.`usuario` = 'admin'
ERROR - 2026-06-13 09:03:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión.
 C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2026-06-13 09:03:16 --> Unable to connect to the database
ERROR - 2026-06-13 09:03:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión.
 C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2026-06-13 09:03:22 --> Unable to connect to the database
ERROR - 2026-06-13 09:03:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión.
 C:\xampp\htdocs\amondocorre\sistemaVentasBDSeparado\backend\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2026-06-13 09:03:44 --> Unable to connect to the database
