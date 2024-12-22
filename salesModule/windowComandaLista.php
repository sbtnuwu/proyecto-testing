<?php
class windowComandaLista
{
    public function windowComandaListaShow($listaComanda)
    {
        ?>
        <html>
            <head>
                <title>Ticket de Venta</title>
                <style>
                    body {
                        font-family: monospace;
                    }
                    .container {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin-top: 20px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        padding: 8px;
                        border-bottom: 1px dotted #000;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                    .button {
                        margin: 10px;
                    }
                </style>
            </head>
            <body>
                <div style="width: 300px; margin: 0 auto;">
                    <h2 style="text-align: center; margin: 0;">Ticket de Venta</h2>
                    <table>
                        <?php 
                        $subtotal = 0;
                        foreach ($listaComanda as $elemento): 
                            $precioTotal = $elemento['Precio'];
                            $subtotal += $precioTotal;
                        ?>
                            <tr>
                                <td><?php echo "idComanda2:"; ?></td>
                                <td><?php echo $elemento['idComanda2']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "DNI:"; ?></td>
                                <td><?php echo $elemento['DNI']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Modelo:"; ?></td>
                                <td><?php echo $elemento['Modelo']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Marca:"; ?></td>
                                <td><?php echo $elemento['Marca']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Placa:"; ?></td>
                                <td><?php echo $elemento['Placa']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "FechaEntrada:"; ?></td>
                                <td><?php echo $elemento['FechaEntrada']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Color:"; ?></td>
                                <td><?php echo $elemento['Color']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Zona:"; ?></td>
                                <td><?php echo $elemento['Zona']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "FechaSalida:"; ?></td>
                                <td><?php echo $elemento['FechaSalida']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Precio:"; ?></td>
                                <td><?php echo "$" . number_format($precioTotal, 2); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <table style="margin-top: 20px;">
                        <tr>
                            <td style="text-align: right;">Subtotal:</td>
                            <td style="text-align: right;"><?php echo "$" . number_format($subtotal, 2); ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">IGV (18%):</td>
                            <td style="text-align: right;"><?php echo "$" . number_format($subtotal * 0.18, 2); ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Total:</td>
                            <td style="text-align: right;"><?php echo "$" . number_format($subtotal * 1.18, 2); ?></td>
                        </tr>
                    </table>
                    <div class="container">
                        <form name='form1' method='POST' action='getImprimir.php'>
                            <input name='btnGenerarFactura' class='button' type='submit' value='Imprimir' />
                            <input name='btnCancelar' class='button' type='submit' value='Cancelar' />
                        </form>
                    </div>
                </div>
            </body>
        </html>
        <?php
    }

    public function windowComandaListaShow2($listaComanda)
    {
        ?>
        <html>
            <head>
                <title>Ticket de Venta</title>
                <style>
                    body {
                        font-family: monospace;
                    }
                    .container {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin-top: 20px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        padding: 8px;
                        border-bottom: 1px dotted #000;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                    .button {
                        margin: 10px;
                    }
                </style>
            </head>
            <body>
                <div style="width: 300px; margin: 0 auto;">
                    <h2 style="text-align: center; margin: 0;">Ticket de Venta</h2>
                    <table>
                        <?php 
                        $subtotal = 0;
                        foreach ($listaComanda as $elemento): 
                            $precioTotal = $elemento['Precio'];
                            $subtotal += $precioTotal;
                        ?>
                            <tr>
                                <td><?php echo "idComanda2:"; ?></td>
                                <td><?php echo $elemento['idComanda2']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "DNI:"; ?></td>
                                <td><?php echo $elemento['DNI']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Modelo:"; ?></td>
                                <td><?php echo $elemento['Modelo']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Marca:"; ?></td>
                                <td><?php echo $elemento['Marca']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Placa:"; ?></td>
                                <td><?php echo $elemento['Placa']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "FechaEntrada:"; ?></td>
                                <td><?php echo $elemento['FechaEntrada']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Descripcion:"; ?></td>
                                <td><?php echo $elemento['Descripcion']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "FechaSalida:"; ?></td>
                                <td><?php echo $elemento['FechaSalida']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo "Precio sin impuestos:"; ?></td>
                                <td><?php echo "$" . number_format($precioTotal, 2); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <table style="margin-top: 20px;">
                        <tr>
                            <td style="text-align: right;">Subtotal:</td>
                            <td style="text-align: right;"><?php echo "$" . number_format($subtotal, 2); ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">IGV (18%):</td>
                            <td style="text-align: right;"><?php echo "$" . number_format($subtotal * 0.18, 2); ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Total:</td>
                            <td style="text-align: right;"><?php echo "$" . number_format($subtotal * 1.18, 2); ?></td>
                        </tr>
                    </table>
                    <div class="container">
                        <form name='form1' method='POST' action='getImprimir.php'>
                            <input name='btnGenerarFactura' class='button' type='submit' value='Imprimir' />
                            <input name='btnCancelar' class='button' type='submit' value='Cancelar' />
                        </form>
                    </div>
                </div>
            </body>
        </html>
        <?php
    }
}
?>
