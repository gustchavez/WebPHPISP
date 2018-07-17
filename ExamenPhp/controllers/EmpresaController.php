	<?php
		require_once "./models/Empresa.php";

		class EmpresaController {
			public $empresa;	

			public function __construct() {  
		        $this->empresa = new Empresa();
		    } 	

			public function crear() {   
				$this->empresa->setRut($_REQUEST['rut']);
				$this->empresa->setNombre($_REQUEST['nombre']);
				$this->empresa->setPassword($_REQUEST['password']);
				$this->empresa->setDireccion($_REQUEST['direccion']);

				if($this->empresa->crear()){
					echo "Empresa ingresado correctamente <br/>";
					echo "<a href='./manejadorEmpresa.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la creación <br/>";
					echo "<a href='./manejadorEmpresa.php'>Volver</a>";
				}
			}
            
			public function editar() {
				$this->empresa->setCodigo($_REQUEST['codigo']);  
				$this->empresa->setRut($_REQUEST['rut']);    
				$this->empresa->setNombre($_REQUEST['nombre']);
				$this->empresa->setPassword($_REQUEST['password']);
				$this->empresa->setDireccion($_REQUEST['direccion']);

				if($this->empresa->editar()){
					echo "Empresa editado correctamente <br/>";
					echo "<a href='./manejadorEmpresa.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la edicion <br/>";
					echo "<a href='./manejadorEmpresa.php'>Volver</a>";
				}
			}
            
			public function editarPerfil() {
				$this->empresa->setCodigo($_REQUEST['codigo']);  
				$this->empresa->setRut($_REQUEST['rut']);    
				$this->empresa->setNombre($_REQUEST['nombre']);
				$this->empresa->setPassword($_REQUEST['password']);
				$this->empresa->setDireccion($_REQUEST['direccion']);

				if($this->empresa->editar()){
                    header('Location: manejadorEmpresa.php?accion=crudEditarPerfil&codigo='.$codigo);
                    //echo '<script language="javascript">alert("Modificacion Correcta");</script>';
				}
				else{
					echo '<script language="javascript">alert("Error al modificar");</script>';
				}
			}
            
			public function eliminar() {
				$this->empresa->setCodigo($_REQUEST['codigo']);

				if($this->empresa->eliminar()){
					echo "Empresa eliminado correctamente <br/>";
					echo "<a href='./manejadorEmpresa.php'>Volver</a>";
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadorEmpresa.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$empresas = $this->empresa->buscarTodas();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_empresas.php';
				include "views/sections/footer.php";
			}
            
            public function crearDDL() {
				$empresas = $this->empresa->buscarTodas();
				include 'views/ddl_empresas.php';
			}
            
			public function crudIngreso() {
	    		include "views/sections/clienteHead.php";
				include 'views/frm_empresa_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditar() {
				$this->empresa->setCodigo($_REQUEST['codigo']);
				$empresa = $this->empresa->buscarXCodigo();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_empresa_edit.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditarPerfil() {
				$this->empresa->setCodigo($_REQUEST['codigo']);
				$empresa = $this->empresa->buscarXCodigo();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_empresa_edit_perfil.php';
				include "views/sections/footer.php";
			}
            
		}
	?>


