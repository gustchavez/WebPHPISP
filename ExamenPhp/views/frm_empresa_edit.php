<h1>Editar Empresa</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Codigo</td>
			<td><input type="text" name="codigo"  value="<?php echo $empresa->getCodigo(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Rut</td>
			<td><input type="text" name="rut" value="<?php echo $empresa->getRut(); ?>"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $empresa->getPassword(); ?>"/></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" value="<?php echo $empresa->getNombre(); ?>"/></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type="text" name="direccion" value="<?php echo $empresa->getDireccion(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>