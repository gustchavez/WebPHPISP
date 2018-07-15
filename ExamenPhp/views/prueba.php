
<?php include "sections/cabecera.php"; ?>
				
<h1>Editar Analisis Muestra</h1>

<form action="?accion=graficoResultado" method="post">
	<table>		
		<tr>
			<td>Id</td>
			<td><input type="text" name="id" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Editar" />
			</td>
		</tr>
	</table>
</form>

<?php include "sections/pie.php"; ?>