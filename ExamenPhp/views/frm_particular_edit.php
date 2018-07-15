<h1>Editar Particular</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Codigo</td>
			<td><input type="text" name="codigo"  value="<?php echo $particular->getCodigo(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Rut</td>
			<td><input type="text" name="rut" value="<?php echo $particular->getRut(); ?>"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $particular->getPassword(); ?>"/></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" value="<?php echo $particular->getNombre(); ?>"/></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type="text" name="direccion" value="<?php echo $particular->getDireccion(); ?>"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $particular->getEmail(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
	<input type="hidden" name="op" value="editarParticular">
</form>