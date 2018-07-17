	<?php
		require_once "./models/AnalisisMuestra.php";

		class AnalisisMuestraController {
			public $analisisMuestra;	

			public function __construct() {  
		        $this->analisisMuestra = new AnalisisMuestra();
		    } 	

			public function crear() {   
				$this->analisisMuestra->setFechaRecepcion($_REQUEST['fechaRecepcion']);    
				$this->analisisMuestra->setTemperatura($_REQUEST['temperatura']);    
				$this->analisisMuestra->setCantidad($_REQUEST['cantidad']);    
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['empleadoRut']);    
				$this->analisisMuestra->setParticularCodigo($_REQUEST['particularCodigo']);
				$this->analisisMuestra->setEmpresaCodigo($_REQUEST['empresaCodigo']);

				if($this->analisisMuestra->crear()){
					echo "analisisMuestra ingresado correctamente <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
			}
            
			public function editar() {
				$this->analisisMuestra->setId($_REQUEST['id']);
				$this->analisisMuestra->setFechaRecepcion($_REQUEST['fechaRecepcion']);    
				$this->analisisMuestra->setTemperatura($_REQUEST['temperatura']);    
				$this->analisisMuestra->setCantidad($_REQUEST['cantidad']);    
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['empleadoRut']);    
				$this->analisisMuestra->setParticularCodigo($_REQUEST['particularCodigo']);
				$this->analisisMuestra->setEmpresaCodigo($_REQUEST['empresaCodigo']);

				if($this->analisisMuestra->editar()){
					echo "analisisMuestra editado correctamente <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la edicion <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
			}
            
			public function eliminar() {
				$this->analisisMuestra->setId($_REQUEST['id']);   

				if($this->analisisMuestra->eliminar()){
					echo "analisisMuestra eliminado correctamente <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$analisisMuestras = $this->analisisMuestra->buscarTodas();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisMuestra.php';
				include "views/sections/footer.php";
			}
            
			public function buscarXParticular() {
                $this->analisisMuestra->setParticularCodigo($_REQUEST['codigo']);
				$analisisMuestras = $this->analisisMuestra->buscarXParticular();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado.php';
				include "views/sections/footer.php";
			}
            
			public function buscarXEmpresa() {
                $this->analisisMuestra->setParticularCodigo($_REQUEST['codigo']);
				$analisisMuestras = $this->analisisMuestra->buscarXEmpresa();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado.php';
				include "views/sections/footer.php";
			}
            
			public function crudIngreso() {
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisMuestra_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditar() {
				$this->analisisMuestra->setId($_REQUEST['id']);  
				$analisisMuestra = $this->analisisMuestra->buscarXId();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisMuestra_edit.php';
				include "views/sections/footer.php";
			}


            
            public function buscarMuestrasPendienteResultados() {
				$analisisMuestras = $this->analisisMuestra->muestrasSinResultados();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisMuestra.php';
				include "views/sections/footer.php";
			}
		}
	?>
