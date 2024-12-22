<?php

include_once('../view/Formulario.php');

class ProxyFormulario implements Formulario {
    private $formularioReal;
    private $privilegios;

    public function __construct(Formulario $formularioReal, $privilegios) {
        $this->formularioReal = $formularioReal;
        $this->privilegios = $privilegios;
    }

    public function mostrar() {
        if ($this->tienePrivilegios()) {
            $this->formularioReal->mostrar();
        } else {
            echo "No tienes privilegios para acceder a este formulario.";
        }
    }

    private function tienePrivilegios() {
        // Verificar si el usuario tiene alguno de los privilegios requeridos
        return in_array(1, $this->privilegios) || in_array(3, $this->privilegios);
    }
}
?>
