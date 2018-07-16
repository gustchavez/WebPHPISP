<h1>Crear Analisis Muestra</h1>

<form action="?accion=crear" method="post">
	<table>		
		<tr>
			<td>Fecha Recepcion</td>
			<td><input type="date" name="fechaRecepcion"/></td>
		</tr>		
		<tr>
			<td>Temperatura</td>
			<td><input type="text" name="temperatura"/></td>
		</tr>		
		<tr>
			<td>Cantidad</td>
			<td><input type="text" name="cantidad"/></td>
		</tr>		
		<tr>
			<td>Empleado Rut</td>            
			<td><select name="empleadoRut">
                    <?php  
                        require_once "./controllers/EmpleadoController.php";
                        $empleadoController = new EmpleadoController(); 
                        $empleadoController->crearDDLXCategoria('R');
                    ?>
                </select>
            </td>
		</tr>
		<tr>
			<td>Particular Codigo</td>
			<td><select name="particularCodigo">
                <?php  
					require_once "./controllers/ParticularController.php";
					$particularController = new ParticularController(); 
					$particularController->crearDDL();
                ?>
                </select>
            </td>
		</tr>
		<tr>
			<td>Empresa Codigo</td>
			<td><select name="empresaCodigo">
                <?php  
					require_once "./controllers/EmpresaController.php";
					$empresaController = new EmpresaController(); 
					$empresaController->crearDDL();
                ?>
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