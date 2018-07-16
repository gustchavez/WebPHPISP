<h1>Editar Analisis Muestra</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"  value="<?php echo $analisisMuestra->getId(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Fecha Recepcion</td>
			<td><input type="date" name="fechaRecepcion" value="<?php echo $analisisMuestra->getFechaRecepcion(); ?>"/></td>
		</tr>
		<tr>
			<td>Temperatura</td>
			<td><input type="text" name="temperatura" value="<?php echo $analisisMuestra->getTemperatura(); ?>"/></td>
		</tr>
		<tr>
			<td>Cantidad</td>
			<td><input type="text" name="cantidad" value="<?php echo $analisisMuestra->getCantidad(); ?>"/></td>
		</tr>
		<tr>
			<td>Empleado Rut</td>
			<td><input type="text" name="empleadoRut" value="<?php echo $analisisMuestra->getEmpleadoRut(); ?>"/></td>
		</tr>
		<tr>
			<td>Particular Codigo</td>
			<td><input type="text" name="particularCodigo" value="<?php echo $analisisMuestra->getParticularCodigo(); ?>"/></td>
		</tr>
		<tr>
			<td>Empresa Codigo</td>
			<td><input type="text" name="empresaCodigo" value="<?php echo $analisisMuestra->getEmpresaCodigo(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>