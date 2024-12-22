<?php
class formDatosPint
{
   public function formDatosPintshow($datos)
    {
?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Datos del servicio</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                }

                h1 {
                    text-align: center;
                }

                form {
                    max-width: 400px;
                    margin: 0 auto;
                }

                fieldset {
                    border: none;
                    padding: 0;
                    margin: 0;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                }

                input[type="text"],
                input[type="date"] {
                    width: 100%;
                    padding: 5px;
                    margin-bottom: 10px;
                }

                input[type="submit"] {
                    width: 100%;
                    padding: 10px;
                    background-color: #4CAF50;
                    color: white;
                    border: none;
                    cursor: pointer;
                }

                input[type="submit"]:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <h1>Datos del servicio</h1>

            <form name="formDatosPint" method="POST" action="./getDatosPint.php">
                <fieldset>
                    <legend>Datos del Pintado</legend>
                    <label for="dni2">DNI:</label>
                    <input type="text" name="dni2" id="dni2" value="<?php echo $datos[0]; ?>" readonly>

                    <label for="modelo2">Modelo:</label>
                    <input type="text" name="modelo2" id="modelo2" value="<?php echo $datos[1]; ?>" readonly>

                    <label for="marca2">Marca:</label>
                    <input type="text" name="marca2" id="marca2" value="<?php echo $datos[2]; ?>" readonly>

                    <label for="placa2">N° de Placa:</label>
                    <input type="text" name="placa2" id="placa2" value="<?php echo $datos[3]; ?>" readonly>

                    <label for="fechaEntrada2">Fecha de Entrada:</label>
                    <input type="text" name="fechaEntrada2" id="fechaEntrada2" value="<?php echo $datos[4]; ?>" readonly>

                    <label for="color_pintura">Color de pintura:</label>
                    <input type="text" name="color_pintura" id="color_pintura">

                    <label for="zona_pintar">Zona a pintar:</label>
                    <input type="text" name="zona_pintar" id="zona_pintar">

                    <label for="salida_programada">Fecha de Salida:</label>
                    <input type="date" name="salida_programada" id="salida_programada">

                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" id="precio">
                </fieldset>
                
                <input type="submit" name="btnAceptar" value="Aceptar Solicitud"><br><br>
                <input type="submit" name="btnRechazar" value="Rechazar Solicitud">
            </form>
        </body>
        </html>
<?php
    }
}
?>