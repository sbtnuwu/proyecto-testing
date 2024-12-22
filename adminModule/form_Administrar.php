<?php
class formAdministrar {
    public function formAdministrarShow() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Formulario</title>
            <style>
                /* Estilos CSS */
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-color: #f1f1f1;
                    font-family: Arial, sans-serif;
                }

                form {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    background-color: #fff;
                    padding: 30px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                h1 {
                    text-align: center;
                    color: #8c1f1f;
                    margin-bottom: 30px;
                }

                input[type="submit"] {
                    background-color: #8c1f1f;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    margin-top: 10px;
                    cursor: pointer;
                    font-size: 16px;
                }

                input[type="submit"]:hover {
                    background-color: #a63030;
                }
            </style>
        </head>
        <body>
            <form name="nuevoForm" method="post" action="invocador.php">
                <h1>Administrar Usuarios</h1>
                <input type="submit" value="Agregar Usuario" name="btn_create" />
                <input type="submit" value="Eliminar Usuario" name="btn_delete" />
                <input type="submit" value="Leer Usuario" name="btn_read" />
                <input type="submit" value="Modificar Usuario" name="btn_update" />
                <button type='button' onclick="window.location.href='../index.php'">Volver</button>
            </form>
        </body>
        </html>
        <?php
    } 
}