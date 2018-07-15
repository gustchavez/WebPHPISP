<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/EmpresaController.php";
        $empresaController = new EmpresaController();
        $empresaController->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/EmpresaController.php";
        $empresaController = new EmpresaController();
        
        // Llama la accion
        call_user_func( array( $empresaController, $accion ) );
    }
?>




