
<?php
include_once('conectarBaseDatos.php');

class modeloClienteDNI extends conectarBaseDatos
{
    public function verificarUsuario($DNI)
    {
        $query = "SELECT DNI 
                  FROM pintado
                  WHERE DNI = '$DNI'";

        //echo "car";               
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
    public function verificarUsuario2($DNI)
    {
        $query = "SELECT DNI 
                  FROM revision
                  WHERE DNI = '$DNI'";

        //echo "car";               
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




