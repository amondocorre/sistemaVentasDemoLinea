<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comprobante de Compra</title>
    <style>
        body { font-family: 'Arial', sans-serif; font-size: 12px; color: #000; line-height: 1.2; margin: 0; padding: 0; }
        .container { padding: 40px; }
        
        .header { width: 100%; margin-bottom: 20px; }
        .header-left { width: 60%; float: left; }
        .header-right { width: 35%; float: right; border: 1px solid #000; padding: 10px; text-align: center; }
        
        .company-name { font-weight: bold; font-size: 14px; text-transform: uppercase; margin-bottom: 5px; }
        .branch-info { font-size: 11px; }
        
        .recibo-title { font-weight: bold; font-size: 12px; margin-bottom: 5px; }
        .recibo-number { font-weight: bold; font-size: 16px; color: #000; }
        
        .main-title { text-align: center; font-weight: bold; font-size: 24px; margin: 20px 0; clear: both; }
        
        .client-info { width: 100%; margin-bottom: 20px; }
        .info-row { margin-bottom: 5px; }
        .info-label { font-weight: bold; display: inline-block; width: 120px; }
        
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { border: 1px solid #000; padding: 5px; background-color: #f2f2f2; font-size: 10px; text-transform: uppercase; }
        td { border: 1px solid #000; padding: 5px; font-size: 11px; }
        
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        
        .total-section { float: right; width: 300px; }
        .total-row { border: 1px solid #000; padding: 3px 5px; }
        .total-label { display: inline-block; width: 180px; font-weight: bold; text-align: right; font-size: 10px; }
        .total-value { display: inline-block; width: 100px; text-align: right; font-weight: bold; }
        
        .literas { margin-top: 20px; font-style: italic; font-size: 11px; }
        
        .footer { margin-top: 50px; text-align: center; font-size: 10px; }
        
        .clearfix { clear: both; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <div class="company-name"><?php echo $config['nombre_empresa']; ?></div>
                <div class="branch-info">
                    <div style="font-weight: bold;"><?php echo $compra['sucursal']; ?></div>
                    <div><?php echo $compra['sucursal_direccion'] ?: ''; ?></div>
                </div>
            </div>
            <div class="header-right">
                <div class="recibo-title">COMPRA N°</div>
                <div class="recibo-number"><?php echo $compra['numero_compra']; ?></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="main-title">COMPROBANTE DE COMPRA</div>

        <div class="client-info">
            <table style="border: none; margin-bottom: 10px;">
                <tr>
                    <td style="border: none; padding: 2px 0; width: 15%; font-weight: bold;">Fecha:</td>
                    <td style="border: none; padding: 2px 0; width: 35%;"><?php echo date('d/m/Y H:i A', strtotime($compra['fecha_compra'])); ?></td>
                    <td style="border: none; padding: 2px 0; width: 25%; font-weight: bold; text-align: right;">NIT/CI:</td>
                    <td style="border: none; padding: 2px 0; width: 25%; text-align: right;"><?php echo $compra['nit_ci'] ?: '-'; ?></td>
                </tr>
                <tr>
                    <td style="border: none; padding: 2px 0; font-weight: bold;">Proveedor:</td>
                    <td style="border: none; padding: 2px 0;"><?php echo $compra['proveedor']; ?></td>
                    <td style="border: none; padding: 2px 0; font-weight: bold; text-align: right;">Tipo Pago:</td>
                    <td style="border: none; padding: 2px 0; text-align: right; text-transform: capitalize;"><?php echo $compra['tipo_pago']; ?></td>
                </tr>
                <tr>
                    <td style="border: none; padding: 2px 0; font-weight: bold;">Registrado por:</td>
                    <td style="border: none; padding: 2px 0;"><?php echo $compra['usuario']; ?></td>
                    <td style="border: none; padding: 2px 0; font-weight: bold; text-align: right;">Estado Pago:</td>
                    <td style="border: none; padding: 2px 0; text-align: right; text-transform: capitalize;"><?php echo $compra['estado_pago']; ?></td>
                </tr>
            </table>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 15%;">CÓDIGO</th>
                    <th style="width: 10%;">CANTIDAD</th>
                    <th style="width: 45%;">PRODUCTO</th>
                    <th style="width: 15%;">COSTO UNIT.</th>
                    <th style="width: 15%;">SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compra['detalle'] as $item): ?>
                <tr>
                    <td class="text-center"><?php echo $item['codigo_barras']; ?></td>
                    <td class="text-center"><?php echo number_format($item['cantidad'], 2); ?></td>
                    <td><?php echo $item['producto']; ?></td>
                    <td class="text-right"><?php echo number_format($item['costo_unitario'], 2); ?></td>
                    <td class="text-right"><?php echo number_format($item['subtotal'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total-section">
            <div class="total-row">
                <span class="total-label">SUBTOTAL <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($compra['subtotal'], 2); ?></span>
            </div>
            <div class="total-row" style="background-color: #eee;">
                <span class="total-label">TOTAL COMPRA <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($compra['total'], 2); ?></span>
            </div>
            <?php if ($compra['tipo_pago'] === 'credito'): ?>
            <div class="total-row">
                <span class="total-label">MONTO PAGADO <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($compra['monto_pagado'], 2); ?></span>
            </div>
            <div class="total-row">
                <span class="total-label">SALDO PENDIENTE <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($compra['saldo_pendiente'], 2); ?></span>
            </div>
            <?php endif; ?>
        </div>
        <div class="clearfix"></div>

        <?php if (!empty($compra['observaciones'])): ?>
        <div style="margin-top: 20px;">
            <strong>Observaciones:</strong><br>
            <?php echo nl2br($compra['observaciones']); ?>
        </div>
        <?php endif; ?>

        <div class="footer">
            <p>Documento interno de control de compras</p>
            <p>Generado el <?php echo date('d/m/Y H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>
