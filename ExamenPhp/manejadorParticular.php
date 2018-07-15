<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/ParticularController.php";
        $particularController = new ParticularController();
        $particularController->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/ParticularController.php";
        $particularController = new ParticularController();
        
        // Llama la accion
        call_user_func( array( $particularController, $accion ) );
    }
?>




