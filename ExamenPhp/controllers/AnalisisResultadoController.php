	<?php
		require_once "./models/AnalisisResultado.php";

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
	    		include "views/sections/cabecera.php";
				include 'views/listado_analisisResultados.php';
				include "views/sections/pie.php";
			}
            
			public function crudIngreso() {
	    		include "views/sections/cabecera.php";
				include 'views/frm_analisisResultado_new.php';
				include "views/sections/pie.php";
			}
            
			public function crudEditar() {
				$this->analisisResultado->setId($_REQUEST['id']);  
				$analisisResultado = $this->analisisResultado->buscarXId();
	    		include "views/sections/cabecera.php";
				include 'views/frm_analisisResultado_edit.php';
				include "views/sections/pie.php";
			}

			public function graficoResultado() {
				$this->analisisResultado->setId($_REQUEST['id']);  
				$analisisResultado = $this->analisisResultado->graficoXId();
				//echo json_encode($analisisResultado);
	    		include "views/sections/cabecera.php";
				include 'views/graficoResultadoMuestra.php';
				include "views/sections/pie.php";
			}
            
		}
	?>
