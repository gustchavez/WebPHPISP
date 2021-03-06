<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" href="../../WebPHPISP/views/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="../../WebPHPISP/views/css/fontello.css">
	<link rel="stylesheet" href="../../WebPHPISP/views/css/estilos2.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="barra-lateral col-12 col-sm-auto">
				<div class="logo">
					<h2>Dashboard</h2>
				</div>
				<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
					<a href="manejadorEmpleado.php"><i class="icon-home"></i><span>Ver PErfil</span></a>
					<a href="manejadorAnalisisTipo.php"><i class="icon-doc-text"></i><span>Ver Análisis Tipo</span></a>
					<a href="manejadorAnalisisMuestra.php?accion=lista_reporRecepcionXMuestra"><i class="icon-users"></i><span>Generar reporte recepcion </span></a>
					<a href="manejadorAnalisisResultado.php?accion=lista_reporTecnicoXResultado"><i class="icon-logout"></i><span>Generar reporte tecnico</span></a>
					<a href="../../WepPHPISP/cerrar.php"><i class="icon-logout"></i><span>Salir</span></a>
				</nav>
			</div>



