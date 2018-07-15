<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/ContactoController.php";
        $contactoController = new ContactoController();
        $contactoController->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/ContactoController.php";
        $contactoController = new ContactoController();
        
        // Llama la accion
        call_user_func( array( $contactoController, $accion ) );
    }
?>




