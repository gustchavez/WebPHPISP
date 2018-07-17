<h1>Reporte Tecnicos por Resulados</h1>	

<table border="1">	
	<tr>
		<td>RUT</td>
		<td>NOMBRE</td>
		<td>CATEGORIA</td>
		<td>Analisis TIPO</td>
		<td>Analisis MUESTRA</td>
		<td>FECHA</td>
		<td>PPM</td>
		<td>ESTADO</td>
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
        
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Analisis</a>