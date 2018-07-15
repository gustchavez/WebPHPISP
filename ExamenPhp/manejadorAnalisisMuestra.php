<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/AnalisisMuestraController.php";
        $analisisMuestra = new AnalisisMuestra();
        $analisisMuestra->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/AnalisisMuestraController.php";
        $analisisMuestra = new AnalisisMuestra();
        
        // Llama la accion
        call_user_func( array( $analisisMuestra, $accion ) );
    }
?>