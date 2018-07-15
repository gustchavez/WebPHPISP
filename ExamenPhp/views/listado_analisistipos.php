<h1>Listado de Analisis Tipos</h1>	

<table border="1">	
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Acciones</td>
	</tr>
	<?php foreach ($analisisTipos as $analisisTipo){ ?>
	<tr>
		<td><?php echo $analisisTipo->getId()      ; ?></td>
		<td><?php echo $analisisTipo->getNombre()  ; ?></td>
        
        <td><a href="?accion=crudEditar&id=<?php echo $analisisTipo->getId();?>">Edit</a>
        - <a href="?accion=eliminar&id=<?php echo $analisisTipo->getId();?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
<br/>
<a href="?accion=crudIngreso">Nuevo Analisis Tipo</a>