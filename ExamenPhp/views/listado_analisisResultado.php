<h1>Listado de Analisis Resultado</h1>	

<table border="1">	
	<tr>
		<td>Fecha</td>
		<td>Ppm</td>
		<td>Estado</td>
		<td>Analisis Muestra</td>
		<td>Analisis Tipo</td>
		<td>Empleado Rut</td>
	</tr>
	<?php foreach ($analisisResultados as $analisisResultado){ ?>
	<tr>
		<td><?php echo $analisisResultado->getFecha()   ; ?></td>
		<td><?php echo $analisisResultado->getPpm()      ; ?></td>
		<td><?php echo $analisisResultado->getEstado()      ; ?></td>
		<td><?php echo $analisisResultado->getAnalisisMuestra()      ; ?></td>
		<td><?php echo $analisisResultado->getAnalisisTipo() ; ?></td>
		<td><?php echo $analisisResultado->getEmpleadoRut() ; ?></td>
        
        <td><a href="?accion=crudEditar&id=<?php echo $analisisResultado->getId();?>">Edit</a>
        - <a href="?accion=eliminar&id=<?php echo $analisisResultado->getId();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Analisis</a>