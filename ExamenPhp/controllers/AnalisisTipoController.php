	<?php
		require_once "./models/AnalisisTipo.php";

		class AnalisisTipoController {
			public $analisisTipo;	

			public function __construct() {
		        $this->analisisTipo = new AnalisisTipo();
		    } 	

			public function crear() {
				$this->analisisTipo->setNombre($_REQUEST['nombre']);

				if($this->analisisTipo->crear()){
					echo "AnalisisTipo ingresado correctamente <br/>";
					echo "<a href='./manejadorAnalisisTipo.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorAnalisisTipo.php'>Volver</a>";
				}
			}
            
			public function editar() {
				$this->analisisTipo->setId($_REQUEST['id']);
				$this->analisisTipo->setNombre($_REQUEST['nombre']);

				if($this->analisisTipo->editar()){
					echo "AnalisisTipo editado correctamente <br/>";
					echo "<a href='./manejadorAnalisisTipo.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la edicion <br/>";
					echo "<a href='./manejadorAnalisisTipo.php'>Volver</a>";
				}
			}
            
			public function eliminar() {
				$this->analisisTipo->setId($_REQUEST['id']);

				if($this->analisisTipo->eliminar()){
					echo "AnalisisTipo eliminado correctamente <br/>";
					echo "<a href='./manejadorAnalisisTipo.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadorAnalisisTipo.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$analisisTipos = $this->analisisTipo->buscarTodas();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_analisisTipos.php';
				include "views/sections/footer.php";
			}
            
			public function crudIngreso() {
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisTipo_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditar() {
				$this->analisisTipo->setId($_REQUEST['id']);
				$analisisTipo = $this->analisisTipo->buscarXId();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_analisisTipo_edit.php';
				include "views/sections/footer.php";
			}            
		}
	?>


