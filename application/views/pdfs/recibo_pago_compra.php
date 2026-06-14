<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recibo de Pago a Proveedor</title>
    <style>
        body { font-family: 'Arial', sans-serif; font-size: 11px; color: #333; line-height: 1.4; margin: 0; padding: 0; }
        .container { padding: 30px; }
        
        .header { width: 100%; margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .header-left { width: 60%; float: left; }
        .header-right { width: 35%; float: right; text-align: right; }
        
        .company-name { font-weight: bold; font-size: 16px; color: #000; text-transform: uppercase; }
        .branch-info { font-size: 10px; color: #666; }
        
        .recibo-title { font-weight: bold; font-size: 18px; color: #000; margin-bottom: 5px; }
        .recibo-number { font-weight: bold; font-size: 14px; color: #d32f2f; }
        
        .section-title { background: #f5f5f5; padding: 5px 10px; font-weight: bold; margin: 20px 0 10px 0; border-left: 4px solid #333; }
        
        .info-grid { width: 100%; margin-bottom: 20px; }
        .info-label { font-weight: bold; width: 100px; color: #555; }
        .info-value { border-bottom: 1px dotted #ccc; padding-left: 5px; }
        
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th { background: #f2f2f2; color: #000; border: 1px solid #eee; padding: 8px; text-align: left; text-transform: uppercase; font-size: 10px; }
        td { padding: 8px; border: 1px solid #eee; }
        
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        
        .summary-table { float: right; width: 250px; margin-top: 20px; background: #f9f9f9; border: 1px solid #eee; }
        .summary-table td { padding: 5px 10px; border: none; }
        .summary-label { font-weight: bold; text-align: right; width: 140px; }
        .summary-value { text-align: right; width: 90px; }
        .summary-total { border-top: 1px solid #ddd !important; font-weight: bold; font-size: 12px; color: #000; }
        
        .footer { margin-top: 60px; text-align: center; color: #999; font-size: 9px; border-top: 1px solid #eee; padding-top: 10px; clear: both; }
        
        .signature-section { margin-top: 80px; width: 100%; }
        .signature-box { width: 200px; text-align: center; border-top: 1px solid #333; padding-top: 5px; margin: 0 auto; }
        
        .clearfix { clear: both; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <div class="company-name"><?php echo $config['nombre_empresa']; ?></div>
                <div class="branch-info">
                    <div><?php echo $pago['sucursal']; ?></div>
                    <div><?php echo $pago['sucursal_direccion']; ?></div>
                </div>
            </div>
            <div class="header-right">
                <div class="recibo-title">RECIBO DE PAGO</div>
                <div class="recibo-number">N° <?php echo str_pad($pago['id'], 6, '0', STR_PAD_LEFT); ?></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <table style="width: 100%; margin-top: 10px;">
            <tr>
                <td style="width: 15%; font-weight: bold; border: none;">Fecha Pago:</td>
                <td style="width: 35%; border-bottom: 1px solid #eee;"><?php echo date('d/m/Y H:i A', strtotime($pago['fecha_pago'])); ?></td>
                <td style="width: 15%; font-weight: bold; border: none; text-align: right;">Proveedor:</td>
                <td style="width: 35%; border-bottom: 1px solid #eee; text-align: right;"><?php echo $pago['proveedor']; ?></td>
            </tr>
            <tr>
                <td style="font-weight: bold; border: none;">Compra Ref.:</td>
                <td style="border-bottom: 1px solid #eee;"><?php echo $pago['numero_compra']; ?></td>
                <td style="font-weight: bold; border: none; text-align: right;">NIT/CI:</td>
                <td style="border-bottom: 1px solid #eee; text-align: right;"><?php echo $pago['proveedor_nit'] ?: '-'; ?></td>
            </tr>
        </table>

        <div class="section-title">DETALLE DEL PAGO</div>
        
        <table style="background: #fff;">
            <thead>
                <tr>
                    <th>Descripción / Concepto</th>
                    <th class="text-center" style="width: 120px;">Método de Pago</th>
                    <th class="text-right" style="width: 120px;">Monto Pagado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Pago a cuenta de compra mercadería<br>
                        <small style="color: #666;"><?php echo $pago['observaciones'] ?: 'Sin observaciones adicionales'; ?></small>
                        <?php if($pago['referencia']): ?>
                            <br><small>Ref: <?php echo $pago['referencia']; ?></small>
                        <?php endif; ?>
                    </td>
                    <td class="text-center"><?php echo $pago['metodo_pago'] ?: 'Efectivo'; ?></td>
                    <td class="text-right" style="font-weight: bold; font-size: 12px;">
                        <?php echo number_format($pago['monto'], 2); ?> <?php echo $config['simbolo_moneda']; ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="summary-table">
            <tr>
                <td class="summary-label">Total Compra:</td>
                <td class="summary-value"><?php echo number_format($pago['total_compra'], 2); ?></td>
            </tr>
            <tr>
                <td class="summary-label">Monto Pagado:</td>
                <td class="summary-value"><?php echo number_format($pago['monto'], 2); ?></td>
            </tr>
            <tr class="summary-total">
                <td class="summary-label">Saldo Pendiente:</td>
                <td class="summary-value"><?php echo number_format($pago['saldo_actual'], 2); ?> <?php echo $config['simbolo_moneda']; ?></td>
            </tr>
        </table>
        <div class="clearfix"></div>

        <div class="signature-section">
            <div style="width: 50%; float: left; text-align: center;">
                <div class="signature-box">
                    Entregué Conforme<br>
                    <small>(Firma y Sello)</small>
                </div>
            </div>
            <div style="width: 50%; float: right; text-align: center;">
                <div class="signature-box">
                    Recibí Conforme<br>
                    <small><?php echo $pago['usuario']; ?></small>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="footer">
            <p>Este documento es un comprobante de pago interno realizado a proveedores.</p>
            <p>Generado por el sistema el <?php echo date('d/m/Y H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>
