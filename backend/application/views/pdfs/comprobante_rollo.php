<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recibo Rollo</title>
    <style>
        @page { margin: 0; }
        body { font-family: 'Courier New', Courier, monospace; font-size: 11px; color: #000; margin: 0; padding: 8px; width: auto; }
        
        .header { text-align: center; margin-bottom: 5px; }
        .company-name { font-weight: bold; font-size: 13px; text-transform: uppercase; }
        .branch-info { font-size: 10px; margin-top: 2px; }
        
        .divider { border-top: 1px dashed #000; margin: 5px 0; }
        
        .title { text-align: center; font-weight: bold; font-size: 12px; margin: 5px 0; }
        .number { text-align: center; font-size: 11px; font-weight: bold; }
        
        .info-section { margin-bottom: 5px; font-size: 9px; }
        .info-row { margin-bottom: 2px; }
        
        table { width: 100%; border-collapse: collapse; margin-bottom: 5px; font-size: 9px; }
        th { text-align: left; border-bottom: 1px solid #000; padding: 2px 0; }
        td { padding: 2px 0; vertical-align: top; }
        
        .item-row { font-weight: bold; }
        .item-detail { font-size: 8px; color: #333; }
        
        .text-right { text-align: right; }
        
        .total-section { margin-top: 5px; }
        .total-row { display: block; font-size: 10px; }
        .total-label { display: inline-block; width: 60%; text-align: right; }
        .total-value { display: inline-block; width: 35%; text-align: right; font-weight: bold; }
        
        .footer { text-align: center; margin-top: 15px; font-size: 9px; }
        
        /* Ajuste para Dompdf */
        body { overflow: hidden; }

        .watermark {
            position: fixed;
            top: 30%;
            left: 50%;
            width: 300px;
            margin-left: -150px;
            text-align: center;
            font-size: 50px;
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
    <div class="header">
        <div class="company-name"><?php echo $config['nombre_empresa']; ?></div>
        <div class="branch-info">
            <div><?php echo $venta['sucursal']; ?></div>
            <div><?php echo $venta['sucursal_direccion']; ?></div>
            <div><?php echo $venta['sucursal_ciudad']; ?></div>
        </div>
    </div>

    <div class="divider"></div>
    
    <div class="title">RECIBO</div>
    <div class="number">N° <?php echo $venta['numero_venta']; ?></div>

    <div class="divider"></div>

    <div class="info-section">
        <div class="info-row"><strong>FECHA:</strong> <?php echo date('d/m/Y H:i', strtotime($venta['fecha_venta'])); ?></div>
        <div class="info-row"><strong>CLIENTE:</strong> <?php echo $venta['cliente'] ?: 'SIN NOMBRE'; ?></div>
        <div class="info-row"><strong>NIT/CI:</strong> <?php echo $venta['cliente_nit'] ?: '0'; ?></div>
    </div>

    <div class="divider"></div>

    <table>
        <thead>
            <tr>
                <th style="width: 70%;">DETALLE</th>
                <th style="width: 30%; text-align: right;">SUBT.</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($venta['detalle'] as $item): ?>
            <tr>
                <td colspan="2" class="item-row"><?php echo $item['producto']; ?></td>
            </tr>
            <tr>
                <td class="item-detail">
                    <?php echo $item['cantidad']; ?> x <?php echo number_format($item['precio_unitario'], 2); ?>
                    <?php if ($item['descuento'] > 0): ?> (Desc. -<?php echo number_format($item['descuento'], 2); ?>)<?php endif; ?>
                </td>
                <td class="text-right" style="vertical-align: bottom;">
                    <?php echo number_format($item['subtotal'], 2); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="divider"></div>

    <div class="total-section">
        <div class="total-row">
            <span class="total-label">SUBTOTAL:</span>
            <span class="total-value"><?php echo number_format($venta['subtotal'], 2); ?></span>
        </div>
        <div class="total-row">
            <span class="total-label">DESCUENTO:</span>
            <span class="total-value">-<?php echo number_format($venta['descuento'], 2); ?></span>
        </div>
        <div class="total-row" style="font-size: 12px; margin-top: 2px; padding-top: 2px;">
            <span class="total-label"><strong>TOTAL:</strong></span>
            <span class="total-value"><?php echo number_format($venta['total'], 2); ?> <?php echo $config['simbolo_moneda']; ?></span>
        </div>
    </div>

    <div class="footer">
        <p>¡Gracias por su compra!</p>
        <p>Cajero: <?php echo $venta['usuario']; ?></p>
    </div>
</body>
</html>
