<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recibo de Cobro</title>
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

        .watermark {
            position: fixed;
            top: 40%;
            left: 50%;
            width: 800px;
            margin-left: -400px;
            text-align: center;
            font-size: 100px;
            color: rgba(0, 0, 0, 0.05);
            font-weight: bold;
            transform: rotate(-45deg);
            z-index: -1;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="watermark">RECIBO DE COBRO</div>
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
                <div class="recibo-title">RECIBO COBRO N°</div>
                <div class="recibo-number"><?php echo str_pad($cobro['id'], 6, '0', STR_PAD_LEFT); ?></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="main-title">RECIBO DE COBRO</div>

        <div class="client-info">
            <table style="border: none; margin-bottom: 10px;">
                <tr>
                    <td style="border: none; padding: 2px 0; width: 15%; font-weight: bold;">Fecha:</td>
                    <td style="border: none; padding: 2px 0; width: 35%;"><?php echo date('d/m/Y H:i A', strtotime($cobro['created_at'])); ?></td>
                    <td style="border: none; padding: 2px 0; width: 25%; font-weight: bold; text-align: right;">NIT/CI/CEX:</td>
                    <td style="border: none; padding: 2px 0; width: 25%; text-align: right;"><?php echo $venta['cliente_nit'] ?: '0'; ?></td>
                </tr>
                <tr>
                    <td style="border: none; padding: 2px 0; font-weight: bold;">Cliente:</td>
                    <td style="border: none; padding: 2px 0;"><?php echo $venta['cliente'] ?: 'SIN NOMBRE'; ?></td>
                    <td style="border: none; padding: 2px 0; font-weight: bold; text-align: right;">Venta Ref:</td>
                    <td style="border: none; padding: 2px 0; text-align: right;"><?php echo $venta['numero_venta']; ?></td>
                </tr>
            </table>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 20%;">FECHA PAGO</th>
                    <th style="width: 50%;">DESCRIPCIÓN DEL COBRO</th>
                    <th style="width: 30%;">MONTO PAGADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo date('d/m/Y', strtotime($cobro['created_at'])); ?></td>
                    <td>
                        Pago a cuenta de Venta Nº <?php echo $venta['numero_venta']; ?><br>
                        <small>Método: <?php echo $cobro['metodo_pago']; ?> | Ref: <?php echo $cobro['referencia']; ?></small><br>
                        <small>Cobrado por: <?php echo $cobro['usuario']; ?></small>
                    </td>
                    <td class="text-right" style="font-weight: bold; font-size: 14px;">
                        <?php echo number_format($cobro['monto'], 2); ?> <?php echo $config['simbolo_moneda'] ?: 'Bs'; ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="total-section">
            <div class="total-row">
                <span class="total-label">TOTAL VENTA</span>
                <span class="total-value"><?php echo number_format($venta['total'], 2); ?></span>
            </div>
            <div class="total-row">
                <span class="total-label">SALDO ANTERIOR</span>
                <span class="total-value"><?php echo number_format($venta['saldo'] + $cobro['monto'], 2); ?></span>
            </div>
            <div class="total-row" style="background-color: #eee;">
                <span class="total-label">NUEVO SALDO</span>
                <span class="total-value"><?php echo number_format($venta['saldo'], 2); ?></span>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="literas">
            <strong>Son:</strong> <?php echo $monto_literal; ?>
        </div>

        <div style="margin-top: 60px; text-align: center;">
            <div style="display: inline-block; width: 200px; border-top: 1px solid #000; padding-top: 5px;">
                Firma Responsable
            </div>
            <div style="display: inline-block; width: 100px;"></div>
            <div style="display: inline-block; width: 200px; border-top: 1px solid #000; padding-top: 5px;">
                Firma Cliente
            </div>
        </div>

        <div class="footer">
            <p>¡Gracias por su preferencia!</p>
            <p>Documento generado electrónicamente el <?php echo date('d/m/Y H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>
