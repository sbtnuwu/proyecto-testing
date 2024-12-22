<?php
class formCreate {
    public function formCreateShow() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Formulario de Usuarios</title>
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

                input[type="text"],
                input[type="password"],
                select {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #e8c6ae;
                    margin-bottom: 10px;
                }

                select option {
                    color: #8c1f1f;
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
            <h1>Formulario de Usuarios</h1>
            <form name="nuevoForm" method="post" action="commandCrearUsuario.php">
                <input type="text" name="nombre" placeholder="Nombre" required />
                <input type="password" name="password" placeholder="Contraseña" required />
                <select name="estado" required>
                    <option value="" disabled selected>Seleccione un estado</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
                <select name="tipo" required>
                    <option value="" disabled selected>Seleccione el tipo de usuario</option>
                    <option value="Operario">Operario</option>
                    <option value="Cajero">Cajero</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <input type="submit" value="Agregar usuario" name="btn_create" />
            </form>
        </body>
        </html>
        <?php
    }
}
