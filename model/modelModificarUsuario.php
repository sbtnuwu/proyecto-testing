<?php

include_once('../model/conectarBaseDatos.php');

class modeloModifi extends ConectarBaseDatos
{
    public function ModifiUsuario($arreglo)
    {
        // Conexión a la base de datos
        $conexion = $this->conecta();

        // Verifica los datos recibidos
        error_log("Datos recibidos: " . print_r($arreglo, true));

        // Preparar la consulta 1
        $query = "UPDATE usuarios SET login = ?, password = ?, estado = ? WHERE id = ?";
        $stmt = $conexion->prepare($query);
        if ($stmt === false) {
            error_log("Error al preparar la consulta 1: " . $conexion->error);
            $this->desconecta($conexion);
            return false;
        }

        // Bind y ejecutar la consulta 1
        $stmt->bind_param('sssi', $arreglo[1], $arreglo[2], $arreglo[3], $arreglo[0]);
        if ($stmt->execute() === false) {
            error_log("Error en la consulta 1: " . $stmt->error);
            $stmt->close();
            $this->desconecta($conexion);
            return false;
        }

        // Log para verificar la cantidad de filas afectadas
        $affectedRows = $stmt->affected_rows;
        error_log("Filas afectadas en consulta 1: " . $affectedRows);

        // Preparar la consulta 2
        $query_2 = "UPDATE usuariosprivilegios SET idPriv = ? WHERE idlogin = ?";
        $stmt_2 = $conexion->prepare($query_2);
        if ($stmt_2 === false) {
            error_log("Error al preparar la consulta 2: " . $conexion->error);
            $this->desconecta($conexion);
            return false;
        }

        // Bind y ejecutar la consulta 2
        $stmt_2->bind_param('si', $arreglo[4], $arreglo[0]);
        if ($stmt_2->execute() === false) {
            error_log("Error en la consulta 2: " . $stmt_2->error);
            $stmt_2->close();
            $this->desconecta($conexion);
            return false;
        }

        // Log para verificar la cantidad de filas afectadas
        $affectedRows_2 = $stmt_2->affected_rows;
        error_log("Filas afectadas en consulta 2: " . $affectedRows_2);

        // Cerrar declaraciones y desconectar
        $stmt->close();
        $stmt_2->close();
        $this->desconecta($conexion);

        return true;
    }
}
?>

