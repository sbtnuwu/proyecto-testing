<?php
function verificarBoton($btonEnviar)
{
    if(isset($btonEnviar))
        return true;
    else
        return false;
}

function validarCampos($DNI, $Marca, $Modelo, $Placa, $FechaE)
{
    $DNI = trim($DNI);
    $Marca = trim($Marca);
    $Modelo = trim($Modelo);
    $Placa = trim($Placa);
    $FechaE = trim($FechaE);

    if (is_numeric($DNI) && strlen($DNI) == 8) {
        return true;
    } else {
        return false;
    }
}

function validarRadios($RevTec, $Pintado)
{
    if ($RevTec || $Pintado) {
        return true;
    } else {
        return false;
    }
}

$DNI = $_POST['dni'];
$Modelo = $_POST['modelo'];
$Marca = $_POST['marca'];
$Placa = $_POST['placa'];
$FechaE = $_POST['fecha_entrada'];
$boton = $_POST['btnEnviar'];
$RevTec=$_POST['detalle1'];
$Pintado=$_POST['detalle2'];

if(verificarBoton($boton) && validarCampos($DNI, $Marca, $Modelo, $Placa, $FechaE))
{
    $datos=[$DNI, $Modelo, $Marca, $Placa, $FechaE];
    if (validarRadios($RevTec, $Pintado) && $RevTec == true) {

        include_once('controlRevTec.php');
        $obControl = new controlRevTec();
        $obControl -> mostrarDatosRev($datos);
        
    } elseif (validarRadios($RevTec, $Pintado) && $Pintado == true) {
        
        include_once('controlPintado.php');
        $obControl = new controlPintado();
        $obControl -> mostrarDatosPint($datos);
        
    } else {

        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: No se a seleccionado ninguna opción de servicio","<a href='../index.php'>ir al inicio</a>");
    }
}
else
{
    include_once('../shared/windowMensajeSistema.php');
    $objMensaje = new windowMensajeSistema();
    $objMensaje -> windowMensajeSistemaShow("Error: Los datos ingresados no son válidos","<a href='../index.php'>ir al inicio</a>");
}
?>