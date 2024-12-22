<?php
        
        include_once('../model/modelListar.php');
   
        $modelListar = new modelListar();
        
        $respuesta = $modelListar -> ListarUsuario();
        
        if ($respuesta !== null)     
    {   
        include_once('form_listarusuario.php');
        $modelListar = new formListar();
        $modelListar -> formListarShow($respuesta);
        
        }else{
    }        

?>

