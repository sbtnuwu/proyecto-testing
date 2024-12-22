<?php
function verificarBoton($btonImprimir,$btonCancelar)
{
    if(isset($btonImprimir) || isset($btonCancelar) )
        return true;
    else
        return false;

}


$btonImprimir = $_POST['btnGenerarFactura'];
$btonCancelar = $_POST['btnCancelar'];

    if(verificarBoton($btonImprimir,$btonCancelar))
    {
    
        if ($btonImprimir == true) {

            include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Correcto, ha sido impreso","<a href='../index.php'>ir al inicio</a>");
            
        } elseif ($btonCancelar == true) {
            include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Factura cancelada","<a href='../index.php'>ir al inicio</a>");
            
        } else {

            include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Error: No se a seleccionado ninguna opción ","<a href='../index.php'>ir al inicio</a>");
        }
    }
    else
    {
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: Algo ha salido mal","<a href='../index.php'>ir al inicio</a>");
    }
?>