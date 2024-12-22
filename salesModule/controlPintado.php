<?php
class controlPintado
{
    public function mostrarDatosPint($datos)
    {
        include_once('formDatosPint.php');
        $objFormDatosPint = new formDatosPint();
        $objFormDatosPint -> formDatosPintshow($datos);
    }

}
?>