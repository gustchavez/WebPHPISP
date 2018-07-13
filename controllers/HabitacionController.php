
<?php
	require_once "/../models/Habitacion.php";

	class HabitacionController {
		public $habitacion;	

		public function __construct()  
	    {  
	        $this->habitacion = new Habitacion();
	    } 

		public function buscarTodas(){
			$habitaciones = $this->habitacion->buscarTodas();
    		include "../views/sections/cabecera.php";
			include '../views/listado_habitaciones.php';
			include "../views/sections/pie.php";				
		}
	}
?>


