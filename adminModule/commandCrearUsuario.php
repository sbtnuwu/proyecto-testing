<?php
$login = $_POST['nombre'];
$password = $_POST['password'];
$password = md5($password);
$estado = $_POST['estado'];
$idPriv = $_POST['tipo'];

$registros1 = [$login, $password, $estado, $idPriv];

include_once('../model/UsuarioFactory.php');
$modelCreateUsuario = new UsuarioFactory();
$respuesta = $modelCreateUsuario->crearUsuario($registros1);

if($respuesta) {
    include_once('../shared/windowMensajeSistema.php');
    $objMensaje = new windowMensajeSistema();
    $objMensaje->windowMensajeSistemaShow("Se insertó correctamente el nuevo usuario", "<a href='../adminModule/indexAdministrarUsuarios.php'>Ir al inicio</a>");
} else {
    include_once('../shared/windowMensajeSistema.php');
    $objMensaje = new windowMensajeSistema();
    $objMensaje->windowMensajeSistemaShow("Ocurrió un error, no se pudo crear el usuario", "<a href='../adminModule/indexAdministrarUsuarios.php'>Ir al inicio</a>");
}
?>




