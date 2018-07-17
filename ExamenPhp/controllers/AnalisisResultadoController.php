	<?php
		require_once "./models/AnalisisResultado.php";
		require_once "./models/AnalisisMuestra.php";
		require_once "./models/AnalisisTipo.php";
		require_once "./models/Empleado.php";

		class AnalisisResultadoController {
			public $analisisResultado;	

			public function __construct() {  
		        $this->analisisResultado = new AnalisisResultado();
		    } 	

			public function crear() {   
				$this->analisisResultado->setFecha($_REQUEST['fecha']);    
				$this->analisisResultado->setPpm($_REQUEST['ppm']);    
				$this->analisisResultado->setEstado($_REQUEST['estado']);    
				$this->analisisResultado->setAnalisisMuestra($_REQUEST['analisisMuestra']);    
				$this->analisisResultado->setAnalisisTipo($_REQUEST['analisisTipo']);
				$this->analisisResultado->setEmpleadoRut($_REQUEST['empleadoRut']);

				if($this->analisisResultado->crear()){
					echo "analisisResultado ingresado correctamente <br/>";
					echo "<a href='./manejadorAnalisisResultado.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorAnalisisResultado.php'>Volver</a>";
				}
			}
            
			public function editar() {
				$this->analisisResultado->setId($_REQUEST['id']);
				$this->analisisResultado->setFecha($_REQUEST['fecha']);    
				$this->analisisResultado->setPpm($_REQUEST['ppm']);    
				$this->analisisResultado->setEstado($_REQUEST['estado']);    
				$this->analisisResultado->setAnalisisMuestra($_REQUEST['analisisMuestra']);    
				$this->analisisResultado->setAnalisisTipo($_REQUEST['analisisTipo']);
				$this->analisisResultado->setEmpleadoRut($_REQUEST['empleadoRut']);

				if($this->analisisResultado->editar()){
					echo "analisisResultado editado correctamente <br/>";
					echo "<a href='./manejadorAnalisisResultado.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la edicion <br/>";
					echo "<a href='./manejadorAnalisisResultado.php'>Volver</a>";
				}
			}
            
			public function eliminar() {
				$this->analisisResultado->setId($_REQUEST['id']);   

				if($this->analisisResultado->eliminar()){
					echo "analisisResultado eliminado correctamente <br/>";
					echo "<a href='./manejadorAnalisisResultado.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadorAnalisisResultado.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$analisisResultados = $this->analisisResultado->buscarTodas();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado.php';
				include "views/sections/footer.php";
			}
               
			public function buscarXParticular() {
				$analisisResultados = $this->analisisResultado->buscarXParticular($_REQUEST['codigo']);
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado.php';
				include "views/sections/footer.php";
			}   
            
			public function buscarXEmpresa() {
				$analisisResultados = $this->analisisResultado->buscarXEmpresa($_REQUEST['codigo']);
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado.php';
				include "views/sections/footer.php";
			}
               
			public function buscarXParticularRO() {
				$analisisResultados = $this->analisisResultado->buscarXParticular($_REQUEST['codigo']);
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado_readonly.php';
				include "views/sections/footer.php";
			}   
            
			public function buscarXEmpresaRO() {
				$analisisResultados = $this->analisisResultado->buscarXEmpresa($_REQUEST['codigo']);
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisResultado_readonly.php';
				include "views/sections/footer.php";
			}
            
			public function crudIngreso() {
                $analisisMuestra = new AnalisisMuestra();
                $analisMueSinResul = $analisisMuestra->muestrasSinResultados();
                //
	    		$analisisTipos = new AnalisisTipo();
				$tipos = $analisisTipos->buscarTodas();
                //
				$empleado = new Empleado();
				$emplRuts = $empleado->setCategoria("T");
				$emplRuts = $empleado->buscarXCategoria();
	    		include "views/sections/clienteHead.php";
                //
	    		include "views/sections/cabecera.php";
				include 'views/frm_analisisResultado_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditar() {
				$this->analisisResultado->setId($_REQUEST['id']);  
				$analisisResultado = $this->analisisResultado->buscarXId();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisResultado_edit.php';
				include "views/sections/footer.php";
			}

			public function graficoResultado() {
				$this->analisisResultado->setId($_REQUEST['id']);  
				$result = $this->analisisResultado->graficoXId();				
				include "views/sections/clienteHead.php";
				include 'views/graficoResultadoMuestra.php';
				include "views/sections/footer.php";
			}

			public function lista_reporTecnicoXResultado() {
				$result = $this->analisisResultado->reporTecnicoXResultado();
	    		include "views/sections/cabecera.php";
				include 'views/listado_reporTecnicoXResultado.php';
				include "views/sections/pie.php";
			}
            
		}
	?>
