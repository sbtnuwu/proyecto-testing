<?php
include_once('conectarBaseDatos.php');

class modeloClienteComanda extends conectarBaseDatos
{
    public function obtenerDatosComanda($DNI)
    {
        $query = "SELECT idComanda2, DNI, Modelo,Marca, Placa, FechaEntrada, Color, Zona,FechaSalida, Precio
        FROM pintado
        WHERE DNI = '$DNI'";

        // echo $query;               
        $conexion = $this->conecta();
        $resultado = $conexion->query($query);
        $filas = $resultado->num_rows;
        $lista = array();
        for ($i = 0; $i < $filas; $i++)
            $lista[$i] = $resultado->fetch_assoc();
        $this->desconecta($conexion);
        

        if ($filas > 0)
        { 
            
            return $lista;
        }  
        else
            return 0;
    }

    public function obtenerDatosComanda2($DNI)
    {
        $query = "SELECT idComanda, DNI, Modelo,Marca, Placa, FechaEntrada, Descripcion,FechaSalida, Precio
        FROM revision
        WHERE DNI = '$DNI'";

        // echo $query;               
        $conexion = $this->conecta();
        $resultado = $conexion->query($query);
        $filas = $resultado->num_rows;
        $lista = array();
        for ($i = 0; $i < $filas; $i++)
            $lista[$i] = $resultado->fetch_assoc();
        $this->desconecta($conexion);
        

        if ($filas > 0)
        { 
            
            return $lista;
        }  
        else
            return 0;
    }    
}
?>