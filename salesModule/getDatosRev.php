<?php
function verificarBoton1($btonAceptar, $btonCancelar)
{
    if ($btonAceptar || $btonCancelar) {
        return true;
    } else {
        return false;
    }
}

function validarCampos($precio, $Salida, $descripcion)
{
    $precio=trim($precio);
    $Salida=trim($Salida);
    $descripcion=trim($descripcion);

    if (strlen($precio) > 0) {
        return true;
    } else {
        return false;
    }
}

$DNI = $_POST['dni2'];
$Modelo = $_POST['modelo2'];
$Marca = $_POST['marca2'];
$Placa = $_POST['placa2'];
$FechaE = $_POST['fechaEntrada2'];
$descripcion = $_POST['descripcion'];
$Salida = $_POST['salida_programada'];
$precio = $_POST['precio'];
$btonAceptar = $_POST['btnAceptar'];
$btonCancelar = $_POST['btnRechazar'];

if(verificarBoton1($btonAceptar, $btonCancelar))
{
    $registros1=[$DNI, $Modelo, $Marca, $Placa, $FechaE,$descripcion,$Salida,$precio];
    
    if ($btonAceptar == true) {

        if (validarCampos($precio, $Salida, $descripcion)) {
        
            include_once('../model/registroBD.php');
            include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objRegistro = new registro();
    
            $validar=$objRegistro -> regisRev($registros1);
            if($validar==1){
                $objMensaje -> windowMensajeSistemaShow("Solicitud aceptada: Datos resgistrados","<a href='../index.php'>ir al inicio</a>");  
            }else{
                $objMensaje -> windowMensajeSistemaShow("Error: Algo salió mal","<a href='../index.php'>ir al inicio</a>");
            }
                       
        } else {
    
            include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Error: Los datos ingresados no son validos","<a href='../index.php'>ir al inicio</a>");
        }
        
    } elseif ($btonCancelar == true) {
        
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Solicitud cancelada","<a href='../index.php'>ir al inicio</a>");
        
    } else {

        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: No se a seleccionado ninguna boton","<a href='../index.php'>ir al inicio</a>");
    }

}else{
    include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Algo salió mal","<a href='../index.php'>ir al inicio</a>");
}
?>