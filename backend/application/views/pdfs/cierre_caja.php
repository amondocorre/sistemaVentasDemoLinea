<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comprobante de Cierre de Caja</title>
    <style>
        body { font-family: 'Arial', sans-serif; font-size: 14px; color: #333; line-height: 1.5; margin: 0; padding: 20px; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #c00; padding-bottom: 10px; }
        .header h1 { margin: 0; color: #c00; font-size: 24px; }
        
        .info-section { margin-bottom: 20px; width: 100%; border: 1px solid #ddd; padding: 15px; border-radius: 8px; }
        .info-row { margin-bottom: 5px; }
        .info-label { font-weight: bold; width: 150px; display: inline-block; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: #f2f2f2; border-bottom: 2px solid #ddd; padding: 10px; text-align: left; }
        td { border-bottom: 1px solid #ddd; padding: 10px; }
        .text-right { text-align: right; }
        
        .totales-caja { margin-top: 30px; border-top: 2px solid #336699; padding-top: 15px; }
        .total-box { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; border-radius: 4px; }
        .total-label { font-weight: bold; }
        .total-value { float: right; font-weight: bold; }
        
        .footer { margin-top: 100px; text-align: center; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class="header">
        <h1>CIERRE DE TURNO</h1>
    </div>

    <div class="info-section">
        <div class="info-row"><span class="info-label">Usuario:</span> <?php echo $turno['usuario']; ?></div>
        <div class="info-row"><span class="info-label">Sucursal:</span> <?php echo $turno['sucursal']; ?></div>
        <div class="info-row"><span class="info-label">Fecha Apertura:</span> <?php echo date('d/m/Y H:i', strtotime($turno['fecha_apertura'])); ?></div>
        <div class="info-row"><span class="info-label">Fecha Cierre:</span> <?php echo date('d/m/Y H:i', strtotime($turno['fecha_cierre'])); ?></div>
    </div>

    <h3>Resumen por Método de Pago</h3>
    <table>
        <thead>
            <tr>
                <th>Método de Pago</th>
                <th class="text-right">Cantidad</th>
                <th class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resumen_metodos_pago as $r): ?>
            <tr>
                <td><?php echo $r['metodo_pago']; ?></td>
                <td class="text-right"><?php echo $r['cantidad']; ?></td>
                <td class="text-right"><?php echo number_format($r['total'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="totales-caja">
        <div class="total-box">
            <span class="total-label">Monto Inicial:</span>
            <span class="total-value"><?php echo number_format($turno['monto_inicial'], 2); ?> Bs.</span>
        </div>
        <div class="total-box">
            <span class="total-label">Ventas en Efectivo:</span>
            <span class="total-value"><?php echo number_format($total_efectivo_ventas + $total_efectivo_mixto, 2); ?> Bs.</span>
        </div>
        <div class="total-box" style="background-color: #f1f1f1;">
            <span class="total-label">Efectivo Esperado:</span>
            <span class="total-value"><?php echo number_format($efectivo_esperado, 2); ?> Bs.</span>
        </div>
        <div class="total-box">
            <span class="total-label">Efectivo Declarado:</span>
            <span class="total-value"><?php echo number_format($turno['monto_cierre_real'], 2); ?> Bs.</span>
        </div>
        <?php 
            $diferencia = $turno['monto_cierre_real'] - $efectivo_esperado;
            $color = $diferencia >= 0 ? '#155724' : '#721c24';
            $bg = $diferencia >= 0 ? '#d4edda' : '#f8d7da';
        ?>
        <div class="total-box" style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>;">
            <span class="total-label">Diferencia:</span>
            <span class="total-value"><?php echo number_format($diferencia, 2); ?> Bs.</span>
        </div>
    </div>

    <div class="footer">
        <p>Comprobante generado el <?php echo date('d/m/Y H:i'); ?></p>
    </div>
</body>
</html>
