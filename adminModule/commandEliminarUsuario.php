<?php

        $login = $_POST['login'];
        $registros1=$login;

            include_once('../model/modelEliminarUsuario.php');
            $modelEliminarUsuario = new modeloEliminarUsuario();
            $respuesta = $modelEliminarUsuario -> EliminarUsuario($registros1);
            if($respuesta){
                include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Elimino correctamente","<a href='../adminModule/indexAdministrarUsuarios.php'>ir al inicio</a>");
            }
            else{
                include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Ocurrio un error no se pudo eliminar al usuario","<a href='../adminModule/indexAdministrarUsuarios.php'>ir al inicio</a>");
            }
?>

