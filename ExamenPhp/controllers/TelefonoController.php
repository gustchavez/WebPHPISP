	<?php
		require_once "./models/Telefono.php";

		class TelefonoController {
			public $telefono;	

			public function __construct() {  
		        $this->telefono = new Telefono();
		    } 	

			public function crear() {   
				$this->telefono->setNumero($_REQUEST['numero']);    
				$this->telefono->setParticularCodigo($_REQUEST['particularCodigo']);

				if($this->telefono->crear()){
					echo "Telefono ingresado correctamente <br/>";
					echo "<a href='./manejadortelefono.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadortelefono.php'>Volver</a>";
				}
			}
            
			public function editar() {
				$this->telefono->setId($_REQUEST['id']);  
				$this->telefono->setNumero($_REQUEST['numero']);    
				$this->telefono->setParticularCodigo($_REQUEST['particularCodigo']);

				if($this->telefono->editar()){
					echo "Telefono editado correctamente <br/>";
					echo "<a href='./manejadortelefono.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la edicion <br/>";
					echo "<a href='./manejadortelefono.php'>Volver</a>";
				}
			}
            
			public function eliminar() {
				$this->telefono->setId($_REQUEST['id']);

				if($this->telefono->eliminar()){
					echo "Telefono eliminado correctamente <br/>";
					echo "<a href='./manejadortelefono.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadortelefono.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$telefonos = $this->telefono->buscarTodas();
	    		include "views/sections/cabecera.php";
				include 'views/listado_telefonos.php';
				include "views/sections/pie.php";
			}
            
			public function crudIngreso() {
	    		include "views/sections/cabecera.php";
				include 'views/frm_telefono_new.php';
				include "views/sections/pie.php";
			}
            
			public function crudEditar() {
				$this->telefono->setId($_REQUEST['id']);
				$telefono = $this->telefono->buscarXId();
	    		include "views/sections/cabecera.php";
				include 'views/frm_telefono_edit.php';
				include "views/sections/pie.php";
			}
            
		}
	?>


