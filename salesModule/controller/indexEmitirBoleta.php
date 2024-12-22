<?php
session_start();
include_once('../../model/modeloUsuario(boleta).php');
include_once('../view/FormBuscarComandas.php');
include_once('ProxyFormulario.php');

if (!isset($_SESSION['login'])) {
    echo "No has iniciado sesión.";
    exit;
}

$login = $_SESSION['login'];

// Obtener el user_id y privilegios basado en el login
$modeloUsuario = new modeloUsuario();

$userId = $modeloUsuario->obtenerUserIdPorLogin($login);

if ($userId === null) {
    echo "Usuario no encontrado.";
    exit;
}

$privilegios = $modeloUsuario->obtenerPrivilegios($userId);

$formularioReal = new FormBuscarComandas();
$proxyFormulario = new ProxyFormulario($formularioReal, $privilegios);

$proxyFormulario->mostrar();
?>
