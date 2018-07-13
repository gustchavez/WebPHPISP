
<select name="habitacion">
	
	<option>Seleccionar</option>	

	<?php foreach ($habitaciones as $habitacion)
		{ 
	?>
	
		<option value="<?php echo $habitacion->getId(); ?>">
			<?php echo $habitacion->getNumero(); ?>
		</option>

	<?php 
		} 
	?>

</select>