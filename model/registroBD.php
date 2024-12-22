<?php
include_once('conectarBaseDatos.php');
class registro extends ConectarBaseDatos
{
    public function regisPint($registros1)
    {
        
        $query = "INSERT INTO pintado (DNI, Modelo, Marca, Placa, FechaEntrada, Color, Zona, FechaSalida, Precio) 
                  VALUES ('$registros1[0]', '$registros1[1]', '$registros1[2]', '$registros1[3]', '$registros1[4]', '$registros1[5]', '$registros1[6]','$registros1[7]', '$registros1[8]')";
        
        // echo $query;               
        $conecta=$this->conecta();
        $resultado = $conecta->query($query);
        
        $fila = $resultado->num_rows;
        //echo $fila;
        $this->desconecta($conecta);
        if($resultado)
            return 1;
        else
            return 0;

    }

    public function regisRev($registros1)
    {
        
        $query = "INSERT INTO revision (DNI, Modelo, Marca, Placa, FechaEntrada, Descripcion, FechaSalida, Precio) 
                  VALUES ('$registros1[0]', '$registros1[1]', '$registros1[2]', '$registros1[3]', '$registros1[4]', '$registros1[5]', '$registros1[6]','$registros1[7]')";
        
        // echo $query;               
        $conecta=$this->conecta();
        $resultado = $conecta->query($query);
        
        $fila = $resultado->num_rows;
        //echo $fila;
        $this->desconecta($conecta);
        if($resultado)
            return 1;
        else
            return 0;

    }
}
?>