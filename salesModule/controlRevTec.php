<?php
class controlRevTec
{
    public function mostrarDatosRev($datos)
    {
        include_once('formDatosRev.php');
        $objFormDatosRev = new formDatosRev();
        $objFormDatosRev -> formDatosRevshow($datos);
    }

}
?>