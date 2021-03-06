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
				}else{
					echo "No se pudo realizar la creación <br/>";
				}
				echo "<a href='./manejadortelefono.php?accion=buscarTodas&codigo=" .$this->telefono->getParticularCodigo() ."'>Volver</a>";
			}
            
			public function editar() {
				$this->telefono->setId($_REQUEST['id']);  
				$this->telefono->setNumero($_REQUEST['numero']);    
				$this->telefono->setParticularCodigo($_REQUEST['particularCodigo']);

				if($this->telefono->editar()){
					echo "Telefono editado correctamente <br/>";
				}else{
					echo "No se pudo realizar la edicion <br/>";
				}
				echo "<a href='./manejadortelefono.php?accion=buscarTodas&codigo=" .$this->telefono->getParticularCodigo() ."'>Volver</a>";
			}
            
			public function eliminar() {
				$this->telefono->setId($_REQUEST['id']);

				if($this->telefono->eliminar()){
					echo "Telefono eliminado correctamente <br/>";
				}else{
					echo "No se pudo realizar la eliminación <br/>";
				}
				echo "<a href='./manejadortelefono.php?accion=buscarTodas&codigo=" .$this->telefono->getParticularCodigo() ."'>Volver</a>";
			}
                                    
			public function buscarTodas() {
				$this->telefono->setParticularCodigo($_REQUEST['codigo']);  
				$telefonos = $this->telefono->buscarXParticularCodigo();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_telefonos.php';
				include "views/sections/footer.php";
			}
            
			public function crudIngreso() {
				$this->telefono->setParticularCodigo($_REQUEST['codigo']);                 
				$telefono = $this->telefono;
	    		include "views/sections/clienteHead.php";
				include 'views/frm_telefono_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditar() {
				$this->telefono->setId($_REQUEST['id']);
				$telefono = $this->telefono->buscarXId();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_telefono_edit.php';
				include "views/sections/footer.php";
			}
            
		}
	?>


