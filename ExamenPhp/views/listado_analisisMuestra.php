<h1>Listado de Analisis Muestra</h1>	

<table border="1">	
	<tr>
		<td>Fecha Recepcion</td>
		<td>Temperatura</td>
		<td>Cantidad</td>
		<td>Empleado Rut</td>
		<td>Particular Codigo</td>
		<td>Empresa Codigo</td>
	</tr>
	<?php foreach ($analisisMuestras as $analisisMuestra){ ?>
	<tr>
		<td><?php echo $analisisMuestra->getFechaRecepcion()   ; ?></td>
		<td><?php echo $analisisMuestra->getTemperatura()      ; ?></td>
		<td><?php echo $analisisMuestra->getCantidad()      ; ?></td>
		<td><?php echo $analisisMuestra->getEmpleadoRut()      ; ?></td>
		<td><?php echo $analisisMuestra->getParticularCodigo() ; ?></td>
		<td><?php echo $analisisMuestra->getEmpresaCodigo() ; ?></td>
        
        <td><a href="?accion=crudEditar&id=<?php echo $analisisMuestra->getId();?>">Edit</a>
        - <a href="?accion=eliminar&id=<?php echo $analisisMuestra->getId();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Analisis</a>