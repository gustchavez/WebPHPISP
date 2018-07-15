<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/EmpleadoController.php";
        $empleadoController = new EmpleadoController();
        $empleadoController->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/EmpleadoController.php";
        $empleadoController = new EmpleadoController();
        
        // Llama la accion
        call_user_func( array( $empleadoController, $accion ) );
    }
?>




