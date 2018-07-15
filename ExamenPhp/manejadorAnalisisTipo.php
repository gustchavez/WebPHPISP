<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/AnalisisTipoController.php";
        $analisisTipoController = new AnalisisTipoController();
        $analisisTipoController->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/AnalisisTipoController.php";
        $analisisTipoController = new AnalisisTipoController();
        
        // Llama la accion
        call_user_func( array( $analisisTipoController, $accion ) );
    }
?>




