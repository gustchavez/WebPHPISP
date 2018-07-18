	<?php
		require_once "./models/Particular.php";

		class ParticularController {
			public $particular;	

			public function __construct() {  
		        $this->particular = new Particular();
		    } 	

			public function crear() {   
				$this->particular->setRut($_REQUEST['rut']);    
				$this->particular->setPassword($_REQUEST['password']);
				$this->particular->setNombre($_REQUEST['nombre']);
				$this->particular->setDireccion($_REQUEST['direccion']);
				$this->particular->setEmail($_REQUEST['email']);

				if($this->particular->crear()){
					// echo "Particular ingresado correctamente <br/>";
					// echo "<a href='./manejadorParticular.php'>Volver</a>";
					echo "<script language='javascript'>
                            alert('Creación Correcta');
                            window.location.href='./manejadorParticular.php';
                           </script>"; 
				}
				else{
					// echo "No se pudo realizar la creación <br/>";
					// echo "<a href='./manejadorParticular.php'>Volver</a>";
					echo "<script language='javascript'>
                            alert('Error en la creacion');
                            window.location.href='./manejadorParticular.php';
                           </script>";
				}
			}
            
			public function editar() {
				$this->particular->setCodigo($_REQUEST['codigo']);  
				$this->particular->setRut($_REQUEST['rut']);    
				$this->particular->setPassword($_REQUEST['password']);
				$this->particular->setNombre($_REQUEST['nombre']);
				$this->particular->setDireccion($_REQUEST['direccion']);
				$this->particular->setEmail($_REQUEST['email']);

				if($this->particular->editar()){
					// echo "Particular editado correctamente <br/>";
					// echo "<a href='./manejadorParticular.php'>Volver</a>";
					echo "<script language='javascript'>
                            alert('Error al Modifcar');
                            window.location.href='./manejadorParticular.php?accion=crudEditar&codigo='".$codigo"';
                           </script>"; 
				}
				else{
					// echo "No se pudo realizar la edicion <br/>";
					// echo "<a href='./manejadorParticular.php'>Volver</a>";
					echo '<script language="javascript">alert("Error al editar");</script>';
				}
			}
            
			public function editarPerfil() {
                $codigo=$_REQUEST['codigo'];
				$this->particular->setCodigo($_REQUEST['codigo']);  
				$this->particular->setRut($_REQUEST['rut']);    
				$this->particular->setPassword($_REQUEST['password']);
				$this->particular->setNombre($_REQUEST['nombre']);
				$this->particular->setDireccion($_REQUEST['direccion']);
				$this->particular->setEmail($_REQUEST['email']);

				if($this->particular->editar()){
					echo "<script language='javascript'>
                            alert('Actualizacion realizada');
                            window.location.href='./manejadorParticular.php?accion=crudEditarPerfil&codigo='".$codigo"';
                           </script>"; 
                    //header('Location: manejadorParticular.php?accion=crudEditarPerfil&codigo='.$codigo);
                    //echo '<script language="javascript">alert("Modificacion Correcta");</script>';
				}
				else{
					echo '<script language="javascript">alert("Error al modificar");</script>';
				}
			}
            
			public function eliminar() {
				$this->particular->setCodigo($_REQUEST['codigo']);

				if($this->particular->eliminar()){
					// echo "Particular eliminado correctamente <br/>";
					// echo "<a href='./manejadorParticular.php'>Volver</a>";
					echo "<script language='javascript'>
                            alert('Se Elimino Correctamente');
                            window.location.href='./manejadorParticular.php?accion=eliminar&codigo='".$codigo"';
                           </script>"; 
				}
				else{
					echo "No se pudo realizar la eliminación <br/>";
					echo "<a href='./manejadorParticular.php'>Volver</a>";
				}
			}
                                    
			public function buscarTodas() {
				$particulares = $this->particular->buscarTodas();
	    		include "views/sections/clienteHead.php";
				include 'views/listado_particulares.php';
				include "views/sections/footer.php";
			}
            
            public function crearDDL() {
				$particulares = $this->particular->buscarTodas();
				include 'views/ddl_particulares.php';
			}
            
			public function crudIngreso() {
	    		include "views/sections/clienteHead.php";
				include 'views/frm_particular_new.php';
				include "views/sections/footer.php";
			}
            
			public function crudEditar() {
				$this->particular->setCodigo($_REQUEST['codigo']);
				$particular = $this->particular->buscarXCodigo();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_particular_edit.php';
				include "views/sections/footer.php";
			}
            
            public function crudEditarPerfil() {
				$this->particular->setCodigo($_REQUEST['codigo']);
				$particular = $this->particular->buscarXCodigo();
	    		include "views/sections/clienteHead.php";
				include 'views/frm_particular_edit_perfil.php';
				include "views/sections/footer.php";
			}
            
            
			public function login() {
				$this->particular->setRut($_REQUEST['rut']);    
                $this->particular->setPassword($_REQUEST['password']);
                
                $vble = $this->particular->login();
				if($vble->getNombre() != null){
                    echo "<script language='javascript'>
                            alert('Bienvenido ".$vble->getNombre()."');
                            window.location.href='./manejadorAnalisisResultado.php?accion=buscarXParticularRO&codigo=".$vble->getCodigo()."';
                           </script>";
                    
                    //header('Location: manejadorParticular.php?accion=crudEditarPerfil&codigo='.$Particular->getCodigo());
                    //echo '<script language="javascript">alert("Modificacion Correcta");</script>';
				}
				else{
					echo "<script language='javascript'>
                            alert('Error login');
                            window.location.href='./login.php';
                           </script>";
				}
			}
		}
	?>


