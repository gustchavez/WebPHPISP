<?php 
	require_once 'Controlador.php';

	if (isset($_POST['Ingresar'])) {
		$comunaControlador = new ComunaControlador();
		$nombre =$_POST['nombreComuna'];
		$comunaControlador->comuna->crear($nombre);		
		$sismoControlador = new SismoControlador();
		$fechaEvento = $_POST['fechaEvento'];
		$profundidad = $_POST['profundidad'];
		$descripcion = $_POST['descripcion'];
		$intensidad = $_POST['intensidad'];
		$sismoControlador->sismo->crear($fechaEvento,$profundidad,$descripcion,$intensidad);	
		require '../vista/seccion/Cabecera.php';
		require '../vista/Presentacion.php';
		require '../vista/seccion/Pie.php';
	}

	if (isset($_POST['IniciarSesion'])) {
		$usuario = $_POST['usuario'];
		$pass = $_POST['pass'];
		if ($usuario=="admin" && $pass=="admin") {
			$reservas=null;
			$sismoControlador = new SismoControlador();
			try {
				$reservas = $sismoControlador->sismo->buscarTodas();
				if ($reservas != null) {
					require '../vista/seccion/Cabecera.php';
					require '../vista/ListaSismo.php';
					require '../vista/seccion/Pie.php';
				}else{
					require '../vista/seccion/Cabecera.php';
					echo "No hay Datos";
					require '../vista/ListaSismo.php';
					require '../vista/seccion/Pie.php';
				}
			} catch (Exception $e) {
				require '../vista/seccion/Cabecera.php';
				echo "No hay Datos";
				require '../vista/ListaSismo.php';
				require '../vista/seccion/Pie.php';
			}
			
		}else{
			echo "<script> alert('No hay datos') </script>";
			echo "<script language=\"javascript\">
					window.location.href=\"../index.php\";
					</script>";
		}		
	}

	if (isset($_POST['Agregar'])) {

		$usuario = $_POST['usuario'];
		$pass = $_POST['pass'];
		if ($usuario=="admin" && $pass=="admin") {
			require '../vista/seccion/Cabecera.php';
			require '../vista/Agregar.php';
			require '../vista/seccion/Pie.php';
		}else{
			echo "<script> alert('No hay datos') </script>";
			echo "<script language=\"javascript\">
					window.location.href=\"../index.php\";
					</script>";
		}
		
	}

	if (isset($_POST['Eliminar'])) {
		$reservas=null;
		$sismoControlador = new SismoControlador();
		$id = $_POST['idSismo'];
		$idComuna = $_POST['idComuna'];
		$sismoControlador->sismo->eliminarPorId($id,$idComuna);
		
		$reservas = $sismoControlador->sismo->buscarTodas();
		require '../vista/seccion/Cabecera.php';
		require '../vista/ListaSismo.php';
		require '../vista/seccion/Pie.php';
	}

	if (isset($_POST['Modificar'])) {
		$id = $_POST['idSismo'];
		$idComuna = $_POST['idComuna'];		
		require '../vista/seccion/Cabecera.php';
		require '../vista/Registro.php';
		require '../vista/seccion/Pie.php';
	}

	if (isset($_POST['Modificado'])) {
		$reservas = null;
		$id = $_POST['idSismo'];
		$idComuna = $_POST['idComuna'];	

		$comunaControlador = new ComunaControlador();
		$nombre =$_POST['nombreComuna'];
		$comunaControlador->modificar($id, $nombre);

		$sismoControlador = new SismoControlador();
		$fechaEvento = $_POST['fechaEvento'];
		$profundidad = $_POST['profundidad'];
		$descripcion = $_POST['descripcion'];
		$intensidad = $_POST['intensidad'];

		$sismoControlador->sismo-> modificar($id,
									$fechaEvento,  
                                    $profundidad,
                                    $descripcion,
                                    $intensidad );
		
		$reservas = $sismoControlador->sismo->buscarTodas();
		require '../vista/seccion/Cabecera.php';
		require '../vista/ListaSismo.php';
		require '../vista/seccion/Pie.php';
	}
	
	if (isset($_POST['IniciarSesionV2'])) {
		$reservas=null;
		$sismoControlador = new SismoControlador();	
		try {
			$reservas = $sismoControlador->sismo->buscarTodas();
			if ($reservas != null) {
				require '../vista/seccion/Cabecera.php';
				require '../vista/ListaSismo.php';
				require '../vista/seccion/Pie.php';
			}else{
				echo "<script> alert('No hay datos') </script>";
			echo "<script language=\"javascript\">
					window.location.href=\"../index.php\";
					</script>";
			}
		} catch (Exception $e) {
			echo "<script> alert('No hay datos') </script>";
			echo "<script language=\"javascript\">
					window.location.href=\"../index.php\";
					</script>";
		}		
	}


 ?>