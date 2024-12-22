<?php
class formEliminar {
    public function formEliminarShow() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Eliminar Usuario</title>
            <style>
                /* Estilos CSS */
                body {
                    font-family: Arial, sans-serif;
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

                label {
                    display: block;
                    margin-bottom: 10px;
                    color: #8c1f1f;
                }

                input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #e8c6ae;
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
            <h1>Eliminar Usuario</h1>
            <form name="eliminarForm" method="post" action="commandEliminarUsuario.php">
                <label>Nombre de Usuario a eliminar:</label>
                <input type="text" name="login" placeholder="Nombre" required />
                <input type="submit" value="Eliminar usuario" name="btn_delete" />
            </form>
        </body>
        </html>
        <?php
    }
}
