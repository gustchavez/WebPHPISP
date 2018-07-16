<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/estilos.css">

	<title>Iniciar Sesión</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="menu col-lg-7 col-md-12 col-sm-12">			
							Instituto de Salud Pública
			</div>
			<div class="menu col-lg-1 col-md-2 col-sm-2">			
							<a href="inicio.php" class="">Inicio</a>
			</div>
			<div class="menu col-lg-1 col-md-2 col-sm-2">			
							<a href="registrate.php" class="">Registro</a>
			</div>
			<div class="menu col-lg-1 col-md-2 col-sm-2">			
							<a href="login.php" class="">Ingreso</a>
			</div>
			<div class="menu col-lg-1 col-md-2 col-sm-2">			
							<a href="loginEmpresa.php" class="">Empresa</a>
			</div>
			<div class="menu col-lg-1 col-md-2 col-sm-2">			
							<a href="loginIntranet.php" class="">Intranet</a>
			</div>
		</div>
	</div>

	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión</h1>
		<hr class="border">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="rut" class="usuario" placeholder="Rut">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p class="texto-registrate">
			¿ Aun no tienes cuenta ?
			<a href="registrate.php">Regístrate</a>
		</p>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>