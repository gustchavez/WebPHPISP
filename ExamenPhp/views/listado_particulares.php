<h1>Listado de Particulares</h1>	

<table border="1">	
	<tr>
		<td>Codigo</td>
		<td>Rut</td>
		<td>Password</td>
		<td>Nombre</td>
		<td>Direccion</td>
		<td>Email</td>
	</tr>
	<?php foreach ($particulares as $particular){ ?>
	<tr>
		<td><?php echo $particular->getCodigo()   ; ?></td>
		<td><?php echo $particular->getRut()      ; ?></td>
		<td><?php echo $particular->getPassword() ; ?></td>
		<td><?php echo $particular->getNombre()   ; ?></td>
		<td><?php echo $particular->getDireccion(); ?></td>
		<td><?php echo $particular->getEmail()    ; ?></td>
        
        <td><a href="?accion=crudEditar&codigo=<?php echo $particular->getCodigo();?>">Edit</a>
        - <a href="?accion=eliminar&codigo=<?php echo $particular->getCodigo();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Particular</a>