<?php

include_once('Formulario.php');

class FormBuscarComandas implements Formulario {
    public function mostrar() {
        $this->formBuscarComandaShow();
    }

    public function formBuscarComandaShow() {
        ?>
        <html>
        <head>
            <title>BuscarComanda</title>
            <link rel="stylesheet" type="text/css" href="../../style/style.css">
            <style>
                .container {
                    margin-top: 50px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                .logo {
                    margin-bottom: 5px;
                }

                .form-table {
                    text-align: center;
                }
                .button-group {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 20px;
                }

                .button-group .center-button {
                    flex: 1;
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="logo">
                    <img src="../../img/LogoVarsa.png" alt="Logo">
                </div>
                <form name='form1' method='post' action='../getDNI.php'>
                    <table class="form-table" border='0' align='center'>
                        <tr>
                            <td>DNI:</td>
                            <td><input name='txtDNI' type='text' /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name='btnBuscar' type='submit' value='Buscar' /></td>
                            <div class="button-group">
                                <button type='button' onclick="window.location.href='../../index.php'">Volver</button>
                            </div>
                        </tr>
                    </table>
                </form>
            </div>
        </body>
        </html>
        <?php
    }
}
?>
