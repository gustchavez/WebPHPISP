<h1>Editar Contacto</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Rut</td>
			<td><input type="text" name="rut"  value="<?php echo $contacto->getRut(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" value="<?php echo $contacto->getNombre(); ?>"/></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="text" name="email"  value="<?php echo $contacto->getEmail(); ?>" /></td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td><input type="text" name="telefono" value="<?php echo $contacto->getTelefono(); ?>"/></td>
		</tr>
		<tr>
			<td>Empresa Codigo</td>
			<td><input type="text" name="empresaCodigo" value="<?php echo $contacto->getEmpresaCodigo(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>