<?php

class formModificar {
    public function formModificarShow($resultado, $resultado_2) {
        $filas = $resultado_2->num_rows;
        $idPriv = array();
        for ($i = 0; $i < $filas; $i++) {
            $idPriv[$i] = $resultado_2->fetch_assoc();
        }

        ?>
        <html>
        <head>
            <title>Modificar Usuario</title>
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

                .styled-form {
                    width: 80%;
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    background-color: #fff;
                }

                .styled-form label {
                    display: block;
                    margin-bottom: 8px;
                    font-weight: bold;
                }

                .styled-form input[type="text"],
                .styled-form select {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                }

                .styled-form input[type="submit"] {
                    background-color: #8c1f1f;
                    color: #fff;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .styled-form input[type="submit"]:hover {
                    background-color: #a12b2b;
                }
            </style>
        </head>
        <body>
            <h1>Modificar Usuario</h1>
            <div class="styled-form">
                <h2>Datos del usuario encontrado:</h2>
                <p><strong>Idlogin:</strong> <?php echo $resultado[0]; ?></p>
                <p><strong>Nombre:</strong> <?php echo $resultado[1]; ?></p>
                <p><strong>Contraseña:</strong> <?php echo $resultado[2]; ?></p>
                <p><strong>Estado:</strong> <?php echo $resultado[3]; ?></p>
                <?php
                for ($i = 0; $i < count($idPriv); $i++) {
                    $a = $idPriv[$i]['idPriv'];
                    echo "<p><strong>idPriv:</strong> $a</p>";
                }
                ?>

                <!-- Mostrar el formulario para modificar los datos -->
                <form name='modificarForm' method='post' action='commandModificar.php'>
                    <input type='hidden' name='id' value='<?php echo $resultado[0]; ?>' />
                    <input type='hidden' name='login' value='<?php echo $resultado[1]; ?>' />
                    <label for='nuevoLogin'>Nuevo Nombre:</label>
                    <input type='text' id='nuevoLogin' name='nuevoLogin' value='<?php echo $resultado[1]; ?>' required />
                    <label for='nuevoPassword'>Nueva Contraseña:</label>
                    <input type='text' id='nuevoPassword' name='nuevoPassword' value='<?php echo $resultado[2]; ?>' required />
                    <label for='nuevoEstado'>Nuevo Estado:</label>
                    <select id='nuevoEstado' name='nuevoEstado'>
                        <option value='1' <?php echo ($resultado[3] == '1' ? 'selected' : ''); ?>>Activo</option>
                        <option value='0' <?php echo ($resultado[3] == '0' ? 'selected' : ''); ?>>Inactivo</option>
                    </select>
                    <label for='nuevoidPriv'>Nuevo IdPriv:</label>
                    <select id='nuevoidPriv' name='nuevoidPriv' required>
                        <option value='' disabled>Seleccione un Privilegio</option>
                        <option value='1' <?php echo ($a == '1' ? 'selected' : ''); ?>>operario</option>
                        <option value='2' <?php echo ($a == '2' ? 'selected' : ''); ?>>cajero</option>
                        <option value='3' <?php echo ($a == '3' ? 'selected' : ''); ?>>administrador</option>
                    </select>
                    <input type='submit' value='Guardar cambios' name='btn_save' />
                </form>
            </div>
        </body>
        </html>
        <?php
        return true;
    }
}
?>

