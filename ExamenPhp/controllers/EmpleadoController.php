	<?php
		require_once "./models/Empleado.php";

		class EmpleadoController {
			public $empleado;	

			public function __construct() {  
		        $this->empleado = new Empleado();
		    } 	

			public function crear() {   
				$this->empleado->setRut($_REQUEST['rut']);
				$this->empleado->setNombre($_REQUEST['nombre']);
				$this->empleado->setPassword($_REQUEST['password']);
				$this->empleado->setCategoria($_REQUEST['categoria']);

				if($this->empleado->crear()){
					echo "Empleado ingresado correctamente <br/>";
					echo "<a href='./manejadorEmpleado.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorEmpleado.php'>Volver</a>";
				}
			}
            
			public function editar() {  
				$this->empleado->setRut($_REQUEST['rut']);    
				$this->empleado->setPassword($_REQUEST['password']);
				$this->empleado->setNombre($_REQUEST['nombre']);
				$this->empleado->setCategoria($_REQUEST['categoria']);

				if($this->empleado->editar()){
					echo "Empleado editado correctamente <br/>";
					echo "<a href='./manejadorEmpleado.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la edicion <br/>";
					echo "<a href='./manejadorEmpleado.php'>Volver</a>";
				}
			}
            
			public function eliminar() {
				$this->empleado->setRut($_REQUEST['rut']);

				if($this->empleado->eliminar()){
					echo "Empleado eliminado correctamente <br/>";
					echo "<a href='./manejadorEmpleado.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadorEmpleado.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$empleados = $this->empleado->buscarTodas();
	    		include "views/sections/cabecera.php";
				include 'views/listado_empleados.php';
				include "views/sections/pie.php";
			}
                         
			public function buscarXCategoria() {
				$this->empleado->setCategoria($_REQUEST['categoria']);
				$empleados = $this->empleado->buscarXCategoria();
	    		include "views/sections/cabecera.php";
				include 'views/listado_empleados.php';
				include "views/sections/pie.php";
			}
            
			public function crudIngreso() {
	    		include "views/sections/cabecera.php";
				include 'views/frm_empleado_new.php';
				include "views/sections/pie.php";
			}
            
			public function crudEditar() {
				$this->empleado->setRut($_REQUEST['rut']);
				$empleado = $this->empleado->buscarXRut();
	    		include "views/sections/cabecera.php";
				include 'views/frm_empleado_edit.php';
				include "views/sections/pie.php";
			}
            
		}
	?>


