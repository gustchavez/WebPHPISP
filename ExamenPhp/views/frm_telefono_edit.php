<h1>Editar Telefono</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"  value="<?php echo $telefono->getId(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Numero</td>
			<td><input type="text" name="numero" value="<?php echo $telefono->getNumero(); ?>"/></td>
		</tr>
		<tr>
			<td>Particular Codigo</td>
			<td><input type="text" name="particularCodigo" value="<?php echo $telefono->getParticularCodigo(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>