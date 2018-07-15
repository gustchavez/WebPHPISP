<?php 

    if(!isset($_REQUEST['accion']))
    {
        require_once "controllers/AnalisisResultadoController.php";
        $analisisResultado = new AnalisisResultado();
        $analisisResultado->buscarTodas();
    }
    else
    {
        $accion = $_REQUEST['accion'];
        require_once "controllers/AnalisisResultadoController.php";
        $analisisResultado = new AnalisisResultado();
        
        // Llama la accion
        call_user_func( array( $analisisResultado, $accion ) );
    }
?>