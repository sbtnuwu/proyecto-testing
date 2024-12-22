<?php

include_once('../model/conectarBaseDatos.php');

class Usuarios extends conectarBaseDatos{
    public function Operario  ($arreglo){
        $arreglo[3]=1;
        $query = "INSERT INTO usuarios (login, password, estado) VALUES ('$arreglo[0]', '$arreglo[1]', '$arreglo[2]')";
        $query_2 = "INSERT INTO usuariosprivilegios (idlogin, idPriv) VALUES (LAST_INSERT_ID(), '$arreglo[3]')";
    
        $conexion = $this->conecta(); 
           
        if ($conexion->query($query) === TRUE && $conexion->query($query_2) === TRUE) {
            $this->desconecta($conexion);
            return true;
        } else {
            $this->desconecta($conexion);
            return false;
        }
    }
    
    public function Cajero ($arreglo){
        $arreglo[3]=2;
        $query = "INSERT INTO usuarios (login, password, estado) VALUES ('$arreglo[0]', '$arreglo[1]', '$arreglo[2]')";
        $query_2 = "INSERT INTO usuariosprivilegios (idlogin, idPriv) VALUES (LAST_INSERT_ID(), '$arreglo[3]')";
    
        $conexion = $this->conecta(); 
           
        if ($conexion->query($query) === TRUE && $conexion->query($query_2) === TRUE) {
            $this->desconecta($conexion);
            return true;
        } else {
            $this->desconecta($conexion);
            return false;
        }
    }
    
    public function Administrador ($arreglo){
        $arreglo[3]=3;
        $query = "INSERT INTO usuarios (login, password, estado) VALUES ('$arreglo[0]', '$arreglo[1]', '$arreglo[2]')";
        $query_2 = "INSERT INTO usuariosprivilegios (idlogin, idPriv) VALUES (LAST_INSERT_ID(), '$arreglo[3]')";
    
        $conexion = $this->conecta(); 
           
        if ($conexion->query($query) === TRUE && $conexion->query($query_2) === TRUE) {
            $this->desconecta($conexion);
            return true;
        } else {
            $this->desconecta($conexion);
            return false;
        }
    }  
}
?>

