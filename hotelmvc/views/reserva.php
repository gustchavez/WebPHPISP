<?php  
	
	require_once "../controllers/ReservaController.php";	

	if(isset($_POST['op']) == "crearReserva"){
		if(isset($_POST['rut']) && isset($_POST['nombre']) && isset($_POST['habitacion'])){
			$reservaController = new ReservaController();
			$reservaController->crear($_POST['rut'],$_POST['nombre'],$_POST['habitacion']);		
		}
		else{
			echo "Debe llenar todos los campos del formulario<br/>";
			echo "<a href='frm_reserva.php'>Volver</a>";
		}
	}

	if(isset($_GET['op']) == "mostrarReservas"){
		$reservaController = new ReservaController();
		$reservaController->mostrarFormularioIngreso();		
	}

?>

