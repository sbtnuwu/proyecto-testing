
<?php

            $login = $_POST['login'];
            $registros1=$login;
           
            include_once('../model/modelBuscarUsuario.php');

            $modelBuscarUsuario = new modeloBuscar();
            $respuesta = $modelBuscarUsuario ->  BuscarUsuario($registros1);
            if($respuesta){
                include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Se econtró al usuario","<a href='../adminModule/indexAdministrarUsuarios.php'>ir al inicio</a>");
            }
            else{
                include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Ocurrio un error no se encuentra el usuario","<a href='../adminModule/indexAdministrarUsuarios.php'>ir al inicio</a>");
            }

?>


