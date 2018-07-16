<h1>Crear Empleado</h1>

<form action="?accion=crear" method="post">
	<table>		
		<tr>
			<td>Rut</td>
			<td><input type="text" name="rut"/></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" /></td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
                <select name="categoria">
                  <option value="A">Administrador</option>
                  <option value="R">Recepcionasta Muestra</option>
                  <option value="T">Tecnico Analista</option>
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