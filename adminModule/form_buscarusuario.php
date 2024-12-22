<?php
class formBuscar {
    public function formBuscarShow() {
        ?>
        <html>
        <head>
            <title>Modificar Usuario</title>
            <style>
                /* Estilos CSS */
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f9f1e7;
                }

                h1 {
                    text-align: center;
                    color: #8c1f1f;
                    margin-top: 50px;
                }

                form {
                    margin: 20px auto;
                    width: 300px;
                    padding: 20px;
                    border: 1px solid #e8c6ae;
                    background-color: #fff9f3;
                }

                input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #e8c6ae;
                    margin-bottom: 10px;
                }

                input[type="submit"] {
                    padding: 10px 20px;
                    background-color: #8c1f1f;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                }

                input[type="submit"]:hover {
                    background-color: #a63030;
                }
            </style>
        </head>
        <body>
            <h1>Modificar Usuario</h1>

            <form name="buscarForm" method="post" action="controlBuscarUsuario.php">
                <input type="text" name="login" placeholder="Nombre a modificar" required />
                <input type="submit" value="Modificar usuario" name="btn_update" />
            </form>
        </body>
        </html>
        <?php
    }
}