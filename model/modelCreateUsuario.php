<?php
include_once('../model/conectarBaseDatos.php');

class modeloCreate extends conectarBaseDatos
{
    public function CreateUsuario($arreglo)
    {


            if($arreglo[3] == 1){
                $arreglo[3]= $cajero;
            }
            if($arreglo[3] == 2){
                $arreglo[3]= $operador;
            }
            if($arreglo[3] == 3){
                $arreglo[3]= $administrador; 
            }

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