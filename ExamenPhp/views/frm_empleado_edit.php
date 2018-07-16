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
			<td>
                <select name="categoria">
                    <?php if ($empleado->getCategoria() == "A") {
                        echo "<option selected value='A'>Administrador</option>
                              <option value='R'>Recepcionasta Muestra</option>
                              <option value='T'>Tecnico Analista</option>";
                    } elseif ($empleado->getCategoria() == "R") {
                        echo "<option value='A'>Administrador</option>
                              <option selected value='R'>Recepcionasta Muestra</option>
                              <option value='T'>Tecnico Analista</option>";
                    } elseif ($empleado->getCategoria() == "T") {
                        echo "<option value='A'>Administrador</option>
                              <option value='R'>Recepcionasta Muestra</option>
                              <option selected value='T'>Tecnico Analista</option>";
                    } else {
                             "<option value='A'>Administrador</option>
                              <option value='R'>Recepcionasta Muestra</option>
                              <option value='T'>Tecnico Analista</option>";
                    }
                    ?>
                </select>
            </td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>