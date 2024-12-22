<?php
function verificarBoton($btonBuscar)
{
    if(isset($btonBuscar))
        return true;
    else
        return false;
}
function validarTexto($DNI) {
    $DNI = trim($DNI);
    
    if (preg_match('/^[0-9]{8}$/', $DNI)) {
        return true;
    } else {
        return false;
    }
}

$boton = $_POST['btnBuscar'];
//echo verificarBoton($boton);
if(verificarBoton($boton))
{
    $DNI = $_POST['txtDNI'];
    if(validarTexto($DNI))
    {
        include_once('controlAutenticarDNI.php');
        $obControl = new controlAutenticarDNI();
        $obControl -> validarDatos($DNI);
    }    
    else
    {
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: los datos ingresados no son validos","<a href='indexEmitirBoleta.php'>ir al inicio</a>");

    }
}
else
{
    include_once('../shared/windowMensajeSistema.php');
    $objMensaje = new windowMensajeSistema();
    $objMensaje -> windowMensajeSistemaShow("Error: se ha detectado un acceso no permitido","<a href='indexEmitirBoleta.php'>ir al inicio</a>");
}
?>