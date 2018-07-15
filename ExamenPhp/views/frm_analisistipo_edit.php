<h1>Editar Analisis Tipo</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"  value="<?php echo $analisisTipo->getId(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" value="<?php echo $analisisTipo->getNombre(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>