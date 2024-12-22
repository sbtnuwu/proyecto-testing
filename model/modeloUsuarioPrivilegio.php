<?php
include_once('conectarBaseDatos.php');

class modeloUsuarioPrivilegio extends conectarBaseDatos
{
    public function obtenerPrivilegios($login)
    {
        $query = "SELECT P.pathPriv, P.labelPriv, P.buttonPriv, P.iconPriv
                  FROM usuarios U, privilegios P, usuariosprivilegios UP
                  WHERE U.login = '$login' AND
                        U.id = UP.idlogin AND
                        P.idPriv = UP.idPriv";

        // echo $query;               
        $conexion = $this->conecta();
        $resultado = $conexion->query($query);
        $filas = $resultado->num_rows;
        $privilegios = array();
        for ($i = 0; $i < $filas; $i++)
            $privilegios[$i] = $resultado->fetch_assoc();
        $this->desconecta($conexion);

        if ($filas > 0)
            return $privilegios;
        else
            return 0;
    }
}
?>