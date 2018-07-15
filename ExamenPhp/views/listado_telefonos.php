<h1>Listado de Telefonos</h1>	

<table border="1">	
	<tr>
		<td>Id</td>
		<td>Numero</td>
		<td>Particular Codigo</td>
		<td>Acciones</td>
	</tr>
	<?php foreach ($telefonos as $telefono){ ?>
	<tr>
		<td><?php echo $telefono->getId() ; ?></td>
		<td><?php echo $telefono->getNumero() ; ?></td>
		<td><?php echo $telefono->getParticularCodigo() ; ?></td>
        
        <td><a href="?accion=crudEditar&id=<?php echo $telefono->getId();?>">Edit</a>
        - <a href="?accion=eliminar&id=<?php echo $telefono->getId();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso&codigo=<?php echo $telefono->getParticularCodigo(); ?>">Nuevo telefono</a>
<a href="manejadorParticular.php">Volver Particular</a>