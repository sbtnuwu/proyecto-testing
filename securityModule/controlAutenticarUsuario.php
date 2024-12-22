<?php
class controlAutenticarUsuario
{

    public function validarDatos($login,$password)
    {
        include_once('../model/modeloUsuario.php');
        $objUsuario = new modeloUsuario();
        $respuesta = $objUsuario -> verificarUsuario($login,$password);
       if($respuesta==1)
       {
           include_once('../model/modeloUsuarioPrivilegio.php');
           include_once('windowBienvenidaSistema.php');
           $objWindowBienvenida = new windowBienvenidaSistema();
           $objPrivilegioUsuario = new modeloUsuarioPrivilegio();
           $listaPrivilegios = $objPrivilegioUsuario -> obtenerPrivilegios($login);
           session_start();
           $_SESSION['login'] = $login;
           $objWindowBienvenida -> windowBienvenidaSistemaShow($listaPrivilegios);
       }
       else
       {
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("el usuario no se ha encontrado<br> el password no coincide, <br> o esta deshabilitado","<a href='../index.php'>ir al inicio</a>");

       }
    }
}
?>