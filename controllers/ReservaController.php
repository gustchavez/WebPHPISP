
	<?php
		require_once "/../models/Reserva.php";
		require_once "/../models/Habitacion.php";

		class ReservaController {
			public $reserva;	

			public function __construct()  
		    {  
		        $this->reserva = new Reserva();
		    } 	

			public function crear($rut=null,$nombre=null,$nroHabitacion=null){

				$habitacion = new Habitacion();
				$habitacion->setNumero($nroHabitacion);

				$this->reserva->setRut($rut);
				$this->reserva->setNombre($nombre);	
				$this->reserva->setHabitacion($habitacion);	

				if($this->reserva->crear()){
					echo "Reserva ingresada correctamente <br/>";
					echo "<a href='../index.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la reserva <br/>";
					echo "<a href='../index.php'>Volver</a>";
				}
			}

			public function mostrarFormularioIngreso(){
	    		include "../views/sections/cabecera.php";
				include '../views/frm_reserva.php';
				include "../views/sections/pie.php";
			}

			public function buscarTodas(){
				$reservas = $this->reserva->buscarTodas();
	    		include "views/sections/cabecera.php";
				include 'views/listado_reservas.php';
				include "views/sections/pie.php";
			}
		}
	?>


