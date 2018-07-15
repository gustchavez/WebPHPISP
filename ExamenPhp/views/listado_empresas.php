<h1>Listado de Empresas</h1>	

<table border="1">	
	<tr>
		<td>Codigo</td>
		<td>Rut</td>
		<td>Password</td>
		<td>Nombre</td>
		<td>Direccion</td>
		<td>Acciones</td>
	</tr>
	<?php foreach ($empresas as $empresa){ ?>
	<tr>
		<td><?php echo $empresa->getCodigo()   ; ?></td>
		<td><?php echo $empresa->getRut()      ; ?></td>
		<td><?php echo $empresa->getPassword() ; ?></td>
		<td><?php echo $empresa->getNombre()   ; ?></td>
		<td><?php echo $empresa->getDireccion(); ?></td>
        
        <td><a href="?accion=crudEditar&codigo=<?php echo $empresa->getCodigo();?>">Edit</a>
        - <a href="?accion=eliminar&codigo=<?php echo $empresa->getCodigo();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Particular</a>