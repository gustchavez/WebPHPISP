	<?php
		require_once "/../models/Particular.php";

		class ParticularController {
			public $particular;	

			public function __construct() {  
		        $this->particular = new Particular();
		    } 	

			public function crear($codigo=null, $rut=null, $password=null, $nombre=null, $direccion=null, $email=null) {
				$this->particular->setCodigo($codigo);    
				$this->particular->setRut($rut);    
				$this->particular->setPassword($password);
				$this->particular->setNombre($nombre);
				$this->particular->setDireccion$direccion);
				$this->particular->setEmail($email);

				if($this->particular->crear()){
					echo "Particular ingresada correctamente <br/>";
					echo "<a href='../index.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la particular <br/>";
					echo "<a href='../index.php'>Volver</a>";
				}
			}

			public function mostrarFormularioIngreso() {
	    		include "../views/sections/cabecera.php";
				include '../views/frm_rarticular.php';
				include "../views/sections/pie.php";
			}

			public function buscarTodas() {
				$rarticulares = $this->particular->buscarTodas();
	    		include "views/sections/cabecera.php";
				include 'views/listado_particulares.php';
				include "views/sections/pie.php";
			}
		}
	?>


