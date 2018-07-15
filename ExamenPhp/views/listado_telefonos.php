<h1>Listado de Telefonos</h1>	

<table border="1">	
	<tr>
		<td>Id</td>
		<td>Numero</td>
		<td>Particular Codigo</td>
	</tr>
	<?php foreach ($telefonos as $telefono){ ?>
	<tr>
		<td><?php echo $telefono->getId()   ; ?></td>
		<td><?php echo $telefono->getNumero()      ; ?></td>
		<td><?php echo $telefono->getParticularCodigo() ; ?></td>
        
        <td><a href="?accion=crudEditar&id=<?php echo $telefono->getId();?>">Edit</a></td>
        <td><a href="?accion=eliminar&id=<?php echo $telefono->getId();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo telefono</a>