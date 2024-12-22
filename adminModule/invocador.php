    <?php
    

    function verificarBoton($boton){
        if(isset($boton))
        return true;
        else
        return false;
    }

    $boton_C = $_POST['btn_create'];
    $boton_D = $_POST['btn_delete'];
    $boton_E = $_POST['btn_read'];
    $boton_U = $_POST['btn_update'];

    if (verificarBoton($boton_C)) {
        // Mostrar el formulario de creación de usuario
        include_once('./form_crearusuario.php');
        $objFormCreate = new formCreate();
        $objFormCreate -> formCreateShow();
    } elseif (verificarBoton($boton_D)) {
        // Mostrar el formulario de eliminación de usuario
        include_once('./form_eliminarusuario.php');
        $objFormEliminar = new formEliminar();
        $objFormEliminar -> formEliminarShow();
        
    } elseif (verificarBoton($boton_E)) {
        // Mostrar el formulario de lectura de usuarios
        include 'commandListar.php';

    } elseif (verificarBoton($boton_U)) {
        // Mostrar el formulario de modificación de usuario
        include_once('./form_buscarusuario.php');
        $objFormEliminar = new formBuscar();
        $objFormEliminar -> formBuscarShow();
    }
    else{
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: se ha detectado un acceso no permitido","<a href='../index.php'>ir al inicio</a>");
    }
    ?>



