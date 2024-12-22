<?php
include_once('conectarBaseDatos.php');

class modeloUsuario {
    public function obtenerUserIdPorLogin($login) {
        $db = new ConectarBaseDatos();
        $conn = $db->conecta();

        $sql = "SELECT id FROM usuarios WHERE login = '$login'";
        $result = $conn->query($sql);

        $userId = null;
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $userId = $user['id'];
        }

        $db->desconecta($conn);
        return $userId;
    }

    public function obtenerPrivilegios($userId) {
        $db = new ConectarBaseDatos();
        $conn = $db->conecta();

        $sql = "SELECT idPriv FROM usuariosprivilegios WHERE idlogin = $userId";
        $result = $conn->query($sql);

        $privilegios = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $privilegios[] = $row['idPriv'];
            }
        }

        $db->desconecta($conn);
        return $privilegios;
    }
}
?>
