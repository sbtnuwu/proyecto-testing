<?php
include_once('../model/conectarBaseDatos.php');

class modeloEliminarUsuario extends conectarBaseDatos
{
    public function EliminarUsuario($arreglo)
    {
        $query = "DELETE FROM usuarios WHERE login = '$arreglo'";
        $conexion = $this->conecta();
        if ($conexion->query($query) === TRUE) {
            $this->desconecta($conexion);
            return true;
        } else {
            $this->desconecta($conexion);
            return false;
        }
        
    
    }
    }