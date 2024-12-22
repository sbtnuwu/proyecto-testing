<?php
include_once('../model/conectarBaseDatos.php');

class modeloBuscar extends conectarBaseDatos
{
    public function BuscarUsuario($arreglo)
    {       
        
        $query = "SELECT u.*, up.idPriv
        FROM usuarios u
        JOIN usuariosprivilegios up ON u.id = up.idlogin WHERE login = '$arreglo'";       
         $conexion = $this->conecta();

        $resultado = $conexion->query($query);

        if ($resultado->num_rows > 0) {
            // Mostrar los datos del usuario encontrado
            $fila = $resultado->fetch_assoc();
            $idlogin = $fila['id'];
            $login = $fila['login'];
            $password = $fila['password'];
            $estado = $fila['estado'];
            $arreglo_2 = [$idlogin,$login,$password,$estado];
            $query_2 = "SELECT idPriv FROM usuariosprivilegios WHERE idlogin = '$idlogin'";
            $resultado_2 = $conexion->query($query_2);
            if($resultado_2->num_rows > 0)
            {
            include_once ('../adminModule/form_modificar.php');
            $modelModificar = new formModificar();
            $respuesta = $modelModificar-> formModificarShow($arreglo_2,$resultado_2);

            if($respuesta){
                return true;
            }
        }
            
        } else {
            return false;
           // echo "No se encontró ningún usuario con el nombre proporcionado.";
        }
    }
}