<h1>Listado de Reservas</h1>	

<table border="1">	
	<tr>
		<td>Rut</td>
		<td>Nombre</td>
		<td>Ingreso</td>
		<td>Habitacion</td>
	</tr>
	<?php foreach ($reservas as $reserva){ ?>
	<tr>
		<td><?php echo $reserva->getRut(); ?></td>
		<td><?php echo $reserva->getNombre(); ?></td>
		<td><?php echo $reserva->getIngreso(); ?></td>
		<td><?php echo $reserva->getHabitacion()->getNumero(); ?></td>
	</tr>
	<?php
		}
	?>
</table>
<br/>
<a href="views/reserva.php?op=mostrarReservas">Reservar Habitación</a>