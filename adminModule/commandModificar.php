<?php
        
            $id=$_POST['id'];
            $login = $_POST['nuevoLogin'];
            $password = $_POST['nuevoPassword'];
            $estado = $_POST['nuevoEstado'];
            $idPriv = $_POST['nuevoidPriv'];
            
            $registros1=[$id, $login, $password, $estado, $idPriv];

            include_once('../model/modelModificarUsuario.php');
            $modelCreateUsuario = new modeloModifi();
            $respuesta = $modelCreateUsuario -> modifiUsuario($registros1);
            if($respuesta){
                include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Se modificó el usuario","<a href='../adminModule/indexAdministrarUsuarios.php'>ir al inicio</a>");
            }
            else{
                include_once('../shared/windowMensajeSistema.php');
            $objMensaje = new windowMensajeSistema();
            $objMensaje -> windowMensajeSistemaShow("Ocurrio un error no se pudo modificar el usuario","<a href='../adminModule/indexAdministrarUsuarios.php'>ir al inicio</a>");
            }
?>