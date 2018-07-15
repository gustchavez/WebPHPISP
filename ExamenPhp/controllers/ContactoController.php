	<?php
		require_once "./models/Contacto.php";

		class ContactoController {
			public $contacto;	

			public function __construct() {  
		        $this->contacto = new Contacto();
		    } 	

			public function crear() {   
				$this->contacto->setRut($_REQUEST['rut']);    
				$this->contacto->setNombre($_REQUEST['nombre']);    
				$this->contacto->setEmail($_REQUEST['email']);    
				$this->contacto->setTelefono($_REQUEST['telefono']);    
				$this->contacto->setEmpresaCodigo($_REQUEST['empresaCodigo']);

				if($this->contacto->crear()){
					echo "Contacto ingresado correctamente <br/>";
				} else{
					echo "No se pudo realizar la creación <br/>";
				}
			    echo "<a href='./manejadorcontacto.php?accion=buscarTodas&codigo=" .$this->contacto->getEmpresaCodigo() ."'>Volver</a>";
			}
            
			public function editar() {
				$this->contacto->setRut($_REQUEST['rut']);    
				$this->contacto->setNombre($_REQUEST['nombre']);    
				$this->contacto->setEmail($_REQUEST['email']);    
				$this->contacto->setTelefono($_REQUEST['telefono']);    
				$this->contacto->setEmpresaCodigo($_REQUEST['empresaCodigo']);

				if($this->contacto->editar()){
					echo "Contacto editado correctamente <br/>";
				}else{
					echo "No se pudo realizar la edicion <br/>";
				}
			    echo "<a href='./manejadorcontacto.php?accion=buscarTodas&codigo=" .$this->contacto->getEmpresaCodigo() ."'>Volver</a>";
			}
            
			public function eliminar() {
				$this->contacto->setRut($_REQUEST['rut']);   

				if($this->contacto->eliminar()){
					echo "Contacto eliminado correctamente <br/>";
				}else{
					echo "No se pudo realizar la eliminación <br/>";
				}
			    echo "<a href='./manejadorcontacto.php?accion=buscarTodas&codigo=" .$this->contacto->getEmpresaCodigo() ."'>Volver</a>";
			}
                                    
			public function buscarTodas() {
				$this->contacto->setEmpresaCodigo($_REQUEST['codigo']);
				$contactos = $this->contacto->buscarXEmpresaCodigo();
	    		include "views/sections/cabecera.php";
				include 'views/listado_contactos.php';
				include "views/sections/pie.php";
			}
            
			public function crudIngreso() {
				$this->contacto->setEmpresaCodigo($_REQUEST['codigo']);               
				$contacto = $this->contacto;
	    		include "views/sections/cabecera.php";
				include 'views/frm_contacto_new.php';
				include "views/sections/pie.php";
			}
            
			public function crudEditar() {
				$this->contacto->setRut($_REQUEST['rut']);  
				$contacto = $this->contacto->buscarXRut();
	    		include "views/sections/cabecera.php";
				include 'views/frm_contacto_edit.php';
				include "views/sections/pie.php";
			}
            
		}
	?>


