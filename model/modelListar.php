
<?php

include_once('../model/conectarBaseDatos.php');

class modelListar extends conectarBaseDatos
{
    public function ListarUsuario()
    {
        $consulta = "SELECT u.*, up.idPriv
        FROM usuarios u
        JOIN usuariosprivilegios up ON u.id = up.idlogin";

        $conexion = $this->conecta();
        $resultado = $conexion->query($consulta);

        $privilegios = array(); // Array para almacenar los resultados

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $privilegios[] = $fila; // Agregar fila al array de resultados
            }
        }

        $this->desconecta($conexion);

        return $privilegios;
    }
}
