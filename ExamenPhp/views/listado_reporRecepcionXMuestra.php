<h1>Reporte Recepcion por Muestra</h1>	

<table border="1">	
	<tr>
		<td>Rut Empleado</td>
		<td>Nombre Empleado</td>
		<td>Categoria</td>
		<td>Fecha recepcion</td>
		<td>Temperatura</td>
		<td>Nombre Empresa</td>
		<td>Rut Empresa</td>
		<td>Nombre Particular</td>
		<td>Rut Particular</td>
	</tr>
	<?php for ($i=0; $i < count($result) ; $i++) { ?>
	<tr>
		<td><?php echo $result[$i][0]; ?></td>
		<td><?php echo $result[$i][1]; ?></td>
		<td><?php echo $result[$i][2]; ?></td>
		<td><?php echo $result[$i][3]; ?></td>
		<td><?php echo $result[$i][4]; ?></td>
		<td><?php echo $result[$i][5]; ?></td>
		<td><?php echo $result[$i][6]; ?></td>
		<td><?php echo $result[$i][7]; ?></td>
		<td><?php echo $result[$i][8]; ?></td>
        
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Analisis</a>