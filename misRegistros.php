<?php  
	
	session_start();

	$conexion = mysqli_connect("localhost","root","","SISMOLOGIA");
	$queryUsuario = "SELECT * FROM SISMO";
	$resultado = mysqli_query($conexion,$queryUsuario);


	
?>




<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/usuario.css">
</head>
<body>


	<div class= padre>
		<div class="contenedorMenu">
			<a href="comprobarUsuario.php" class="menu"> <?php echo "Bienvenido/a: " .$_SESSION['sesion_usuario'];?> </a>
			<a href="misRegistros.php" class="menu"> Todos mis registros </a>
			<a href="Salir.php" class="menu"> Cerrar Sesión </a>
		</div>
	

	<div class="hijo1">
		
		<img src="images/logo2.png">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ratione rerum tenetur eius magnam id soluta reiciendis ducimus quis excepturi maxime quod, laborum, tempore, accusantium magni a sunt suscipit maiores.</p>
		<img src="images/imagen1.jpg" style="width: 250px";>
	</div>


	<div class="hijo2">
		<h2>MiS SISMOS REGISTRADOS</h2>
		<table>
			<tr>
				<th>Nº</th>
				<th>Fecha Evento</th>
				<th>Comuna</th>
				<th>Profundida</th>
				<th>Descripción</th>
				<th>Intensidad</th>
				<th>Eliminar</th>
			</tr>
 <?php while ($mostrar = mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td><?php echo$mostrar["ID"]; ?></td>
				<td><?php echo$mostrar["FECHA_EVENTO"]; ?></td>
				<td><?php echo$mostrar["COMUNA"]; ?></td>
				<td><?php echo$mostrar["PROFUNDIDAD"]; ?></td>
				<td><?php echo$mostrar["DESCRIPCION"]; ?></td>
				<td><?php echo$mostrar["INTENSIDAD"]; ?></td>
				<td><a href="">Eliminar</a></td>
			</tr>
	 <?php } ?> 
		</table>

	</div>



	</div>
</body>
</html>