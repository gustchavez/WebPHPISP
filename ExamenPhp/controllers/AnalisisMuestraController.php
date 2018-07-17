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
                //
                if(isset($_REQUEST['empresaCodigo'])){
                    $this->analisisMuestra->setParticularCodigo($_REQUEST['particularCodigo']);
                }else{
                    $this->analisisMuestra->setParticularCodigo(null);
                }
                //
				if(isset($_REQUEST['empresaCodigo'])){
                    $this->analisisMuestra->setEmpresaCodigo($_REQUEST['empresaCodigo']);
                }else{
                    $this->analisisMuestra->setEmpresaCodigo(null);
                }
                //
				if($this->analisisMuestra->crear()){
					echo "analisisMuestra ingresado correctamente <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
			}
            
			public function crearE() {   
				$this->analisisMuestra->setFechaRecepcion($_REQUEST['fechaRecepcion']);    
				$this->analisisMuestra->setTemperatura($_REQUEST['temperatura']);    
				$this->analisisMuestra->setCantidad($_REQUEST['cantidad']);    
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['empleadoRut']); 
				$this->analisisMuestra->setEmpresaCodigo($_REQUEST['empresaCodigo']);
                //
				if($this->analisisMuestra->crearE()){
					echo "analisisMuestra ingresado correctamente <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorAnalisisMuestra.php'>Volver</a>";
				}
			}
            
			public function crearP() {   
				$this->analisisMuestra->setFechaRecepcion($_REQUEST['fechaRecepcion']);    
				$this->analisisMuestra->setTemperatura($_REQUEST['temperatura']);    
				$this->analisisMuestra->setCantidad($_REQUEST['cantidad']);    
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['empleadoRut']); 
                $this->analisisMuestra->setParticularCodigo($_REQUEST['particularCodigo']);
                //
				if($this->analisisMuestra->crearP()){
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
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['rut']);
				$am = $this->analisisMuestra;
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
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['rut']);               
				$analisisMuestra = $this->analisisMuestra;
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisMuestra_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudIngresoP() {
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['rut']);               
				$analisisMuestra = $this->analisisMuestra;
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisMuestra_new_P.php';
				include "views/sections/footer.php";
			}
            
			public function crudIngresoE() {
				$this->analisisMuestra->setEmpleadoRut($_REQUEST['rut']);               
				$analisisMuestra = $this->analisisMuestra;
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisMuestra_new_E.php';
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

			public function lista_reporRecepcionXMuestra() {
				$result = $this->analisisMuestra->reporRecepcionXMuestra();
	    		include "views/sections/cabecera.php";
				include 'views/listado_reporRecepcionXMuestra.php';
				include "views/sections/pie.php";
			}
		}
	?>
