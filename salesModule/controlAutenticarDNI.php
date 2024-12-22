<?php
class controlAutenticarDNI
{

    public function validarDatos($DNI)
    {
        include_once('../model/modeloClienteDNI.php');
        $objUsuario = new modeloClienteDNI();
        $respuesta = $objUsuario -> verificarUsuario($DNI);
        $respuesta2 = $objUsuario -> verificarUsuario2($DNI);

       if($respuesta==1 || $respuesta2==1)
       {
        
           include_once('../model/modeloClienteComanda.php');
           include_once('windowComandaLista.php');
           $objWindowComanda = new windowComandaLista();
           $objComandaCliente = new modeloClienteComanda();

           $listaComanda = $objComandaCliente -> obtenerDatosComanda($DNI);
           
           
            if($listaComanda == 0)
            {
                $listaComanda2 = $objComandaCliente -> obtenerDatosComanda2($DNI);
                $objWindowComanda -> windowComandaListaShow2($listaComanda2);
            }
            else{
                $objWindowComanda -> windowComandaListaShow($listaComanda);
            }

           

       }
       else
       {
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("el cliente no se ha encontrado ","<a href='indexImprimirBoleta.php'>ir al inicio</a>");

       }
    }
}
?>