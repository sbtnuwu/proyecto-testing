
<?php
include_once('conectarBaseDatos.php');

class modeloUsuario extends conectarBaseDatos
{
    public function verificarUsuario($login, $password)
    {
        $password = md5($password);
        $query = "SELECT login 
                  FROM usuarios
                  WHERE login = '$login' AND 
                        password = '$password' AND 
                        estado = 1";
             
        $conexion = $this->conecta();
        $resultado = $conexion->query($query);
        $fila = $resultado->num_rows;
        //echo $fila;
        $this->desconecta($conexion);
        if ($fila == 1)
            return 1;
        else
            return 0;
    }
}
?>




