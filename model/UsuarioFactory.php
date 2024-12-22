<?php
include_once('Usuario.php');

class UsuarioFactory {
    public function crearUsuario($arreglo) {
        if($arreglo[3]=='Operario'){
            $modelCreateUsuario = new Usuarios();
            $respuesta = $modelCreateUsuario -> Operario($arreglo);
            return $respuesta;
        }

        if($arreglo[3]=='Cajero'){
            $modelCreateUsuario = new Usuarios();
            $respuesta = $modelCreateUsuario -> Cajero($arreglo);
            return $respuesta;
        }
        
        if($arreglo[3]=='Administrador'){
            $modelCreateUsuario = new Usuarios();
            $respuesta = $modelCreateUsuario -> Administrador($arreglo);
            return $respuesta;
        }
    }
}
?>