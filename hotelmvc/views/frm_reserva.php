

<h1>Reservar Habitación</h1>

<form action="reserva.php" method="post">
	<table>		
		<tr>
			<td>Rut</td>
			<td><input type="text" name="rut" /></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" /></td>
		</tr>
		<tr>
			<td>
				Habitación
			</td>
			<td>
				<?php  
					require_once "../controllers/HabitacionController.php";
					$habitacionController = new HabitacionController(); 
					$habitacionController->buscarTodas();
				?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Reservar" />
			</td>
		</tr>
	</table>
	<input type="hidden" name="op" value="crearReserva">
</form>