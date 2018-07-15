<h1>Editar Empleado</h1>

<form action="?accion=editar" method="post">
	<table>
		<tr>
			<td>Rut</td>
			<td><input type="text" name="rut" value="<?php echo $empleado->getRut(); ?>"/></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" value="<?php echo $empleado->getNombre(); ?>"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $empleado->getPassword(); ?>"/></td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td><input type="text" name="categoria" value="<?php echo $empleado->getCategoria(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>