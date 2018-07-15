<h1>Listado de Contactos</h1>	

<table border="1">	
	<tr>
		<td>Rut</td>
		<td>Nombre</td>
		<td>Email</td>
		<td>Telefono</td>
		<td>Empresa Codigo</td>
		<td>Acciones</td>
	</tr>
	<?php foreach ($contactos as $contacto){ ?>
	<tr>
		<td><?php echo $contacto->getRut()   ; ?></td>
		<td><?php echo $contacto->getNombre()      ; ?></td>
		<td><?php echo $contacto->getEmail()      ; ?></td>
		<td><?php echo $contacto->getTelefono()      ; ?></td>
		<td><?php echo $contacto->getEmpresaCodigo() ; ?></td>
        
        <td><a href="?accion=crudEditar&rut=<?php echo $contacto->getRut();?>">Edit</a>
        - <a href="?accion=eliminar&rut=<?php echo $contacto->getRut();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Contacto</a>