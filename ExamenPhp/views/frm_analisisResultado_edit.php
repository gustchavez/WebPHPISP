<h1>Editar Analisis Resultado</h1>

<form action="?accion=editar" method="post">
	<table>		
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"  value="<?php echo $analisisResultado->getId(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Fecha Recepcion</td>
			<td><input type="text" name="fecha" value="<?php echo $analisisResultado->getFecha(); ?>"/></td>
		</tr>
		<tr>
			<td>Temperatura</td>
			<td><input type="text" name="ppm" value="<?php echo $analisisResultado->getPpm(); ?>"/></td>
		</tr>
		<tr>
			<td>Cantidad</td>
			<td><input type="text" name="estado" value="<?php echo $analisisResultado->getEstado(); ?>"/></td>
		</tr>
		<tr>
			<td>Empleado Rut</td>
			<td><input type="text" name="analisisMuestra" value="<?php echo $analisisResultado->getAnalisisMuestra(); ?>"/></td>
		</tr>
		<tr>
			<td>Particular Codigo</td>
			<td><input type="text" name="analisisTipo" value="<?php echo $analisisResultado->getAnalisisTipo(); ?>"/></td>
		</tr>
		<tr>
			<td>Empresa Codigo</td>
			<td><input type="text" name="empleadoRut" value="<?php echo $analisisResultado->getEmpleadoRut(); ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>