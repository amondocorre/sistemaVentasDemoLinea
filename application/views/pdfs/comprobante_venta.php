<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recibo de Venta</title>
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

        /* Estilo para la marca de agua de ANULADO */
        .watermark {
            position: fixed;
            top: 40%;
            left: 50%;
            width: 800px;
            margin-left: -400px;
            text-align: center;
            font-size: 100px;
            color: rgba(220, 0, 0, 0.25);
            font-weight: bold;
            transform: rotate(-45deg);
            z-index: 9999;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <?php if (isset($venta['estado']) && $venta['estado'] == 'anulada'): ?>
    <div class="watermark">ANULADO</div>
    <?php endif; ?>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <div class="company-name"><?php echo $config['nombre_empresa']; ?></div>
                <div class="branch-info">
                    <div style="font-weight: bold;"><?php echo $venta['sucursal']; ?></div>
                    <div><?php echo $venta['sucursal_direccion']; ?></div>
                    <div><?php echo $venta['sucursal_ciudad'] ?: 'Bolivia'; ?></div>
                </div>
            </div>
            <div class="header-right">
                <div class="recibo-title">RECIBO N°</div>
                <div class="recibo-number"><?php echo $venta['numero_venta']; ?></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="main-title">RECIBO</div>

        <div class="client-info">
            <table style="border: none; margin-bottom: 10px;">
                <tr>
                    <td style="border: none; padding: 2px 0; width: 15%; font-weight: bold;">Fecha:</td>
                    <td style="border: none; padding: 2px 0; width: 35%;"><?php echo date('d/m/Y H:i A', strtotime($venta['fecha_venta'])); ?></td>
                    <td style="border: none; padding: 2px 0; width: 25%; font-weight: bold; text-align: right;">NIT/CI/CEX:</td>
                    <td style="border: none; padding: 2px 0; width: 25%; text-align: right;"><?php echo $venta['cliente_nit'] ?: '0'; ?></td>
                </tr>
                <tr>
                    <td style="border: none; padding: 2px 0; font-weight: bold;">Nombre/Razón Social:</td>
                    <td style="border: none; padding: 2px 0;"><?php echo $venta['cliente'] ?: 'SIN NOMBRE'; ?></td>
                    <td style="border: none; padding: 2px 0; font-weight: bold; text-align: right;">Cod. Cliente:</td>
                    <td style="border: none; padding: 2px 0; text-align: right;"><?php echo $venta['id_cliente'] ?: '1'; ?></td>
                </tr>
            </table>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 15%;">CÓDIGO PRODUCTO</th>
                    <th style="width: 10%;">CANTIDAD</th>
                    <th style="width: 45%;">DESCRIPCIÓN</th>
                    <th style="width: 10%;">PRECIO UNITARIO</th>
                    <th style="width: 10%;">DESCUENTO</th>
                    <th style="width: 10%;">SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($venta['detalle'] as $item): ?>
                <tr>
                    <td class="text-center"><?php echo $item['codigo_barras']; ?></td>
                    <td class="text-center"><?php echo number_format($item['cantidad'], 2); ?></td>
                    <td><?php echo $item['producto']; ?></td>
                    <td class="text-right"><?php echo number_format($item['precio_unitario'], 2); ?></td>
                    <td class="text-right"><?php echo number_format($item['descuento'], 2); ?></td>
                    <td class="text-right"><?php echo number_format($item['subtotal'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total-section">
            <div class="total-row">
                <span class="total-label">SUBTOTAL <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($venta['subtotal'], 2); ?></span>
            </div>
            <div class="total-row">
                <span class="total-label">DESCUENTO <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($venta['descuento'], 2); ?></span>
            </div>
            <div class="total-row" style="background-color: #eee;">
                <span class="total-label">TOTAL <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?></span>
                <span class="total-value"><?php echo number_format($venta['total'], 2); ?></span>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="literas">
            <strong>Son:</strong> <?php echo $monto_literal; ?>
        </div>

        <div class="footer">
            <p>¡Gracias por su preferencia!</p>
        </div>
    </div>
</body>
</html>
