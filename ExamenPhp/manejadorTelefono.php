<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/TelefonoController.php";
        $telefonoController = new TelefonoController();
        $telefonoController->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/TelefonoController.php";
        $telefonoController = new TelefonoController();
        
        // Llama la accion
        call_user_func( array( $telefonoController, $accion ) );
    }
?>




