<h1>Crear Analisis Resultado</h1>

<form action="?accion=crear" method="post">
	<table>		
		<tr>
			<td>Fecha</td>
			<td><input type="text" name="fecha"/></td>
		</tr>		
		<tr>
			<td>Ppm</td>
			<td><input type="text" name="ppm"/></td>
		</tr>		
		<tr>
			<td>Estado</td>
			<td><input type="text" name="estado"/></td>
		</tr>		
		<tr>
			<td>Analisis Muestra</td>
			<td><input type="text" name="analisisMuestra"/></td>
		</tr>
		<tr>
			<td>Analisis Tipo</td>
			<td>
				<select name="analisisTipo">
				<?php foreach ($tipos as $tipo) {?>
	              <option value='<?php echo $tipo->getId(); ?>'><?php echo $tipo->getNombre(); ?></option>
	              	<?php } ?>
	            </select>
			</td>	
		</tr>
		<tr>
			<td>Empleado Rut</td>
			<td>
				<select name="empleadoRut">
				<?php foreach ($emplRuts as $emplRut) {?>
	              <option value='<?php echo $emplRut->getRut(); ?>'><?php echo $emplRut->getNombre(); ?></option>
	              	<?php } ?>
	            </select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Crear" />
			</td>
		</tr>
	</table>
</form>