<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Ventas</title>
    <style>
        body { font-family: 'Arial', sans-serif; font-size: 12px; color: #333; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h1 { margin: 0; color: #336699; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { background-color: #336699; color: white; padding: 8px; text-align: left; }
        td { border: 1px solid #ddd; padding: 6px; }
        .totales { margin-top: 20px; font-weight: bold; border-top: 2px solid #336699; padding-top: 10px; }
        .text-right { text-align: right; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Reporte de Ventas</h1>
        <p>Período: <?php echo $filters['fecha_inicio']; ?> al <?php echo $filters['fecha_fin']; ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nº Venta</th>
                <th>Fecha</th>
                <th>Sucursal</th>
                <th>Usuario</th>
                <th>Método Pago</th>
                <th class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventas as $venta): ?>
            <tr>
                <td><?php echo $venta['numero_venta']; ?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($venta['fecha_venta'])); ?></td>
                <td><?php echo $venta['sucursal']; ?></td>
                <td><?php echo $venta['usuario']; ?></td>
                <td><?php echo $venta['metodo_pago']; ?></td>
                <td class="text-right"><?php echo number_format($venta['total'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="totales">
        <p>Cantidad de ventas: <?php echo $totales['cantidad']; ?></p>
        <p>Monto Total: <?php echo number_format($totales['monto'], 2); ?> Bs.</p>
    </div>
</body>
</html>
