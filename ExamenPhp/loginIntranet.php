<?php session_start();

if (isset($_SESSION['rut'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$rut = filter_var(strtolower($_POST['rut']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=bbddisp', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}


	$statement = $conexion->prepare('SELECT * FROM empleado WHERE rut = :rut AND password = :password');

	$statement->execute(array(
		':rut' => $rut,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['rut'] = $rut;
		echo "Datos Correctos";
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/sections/loginIntranet.view.php';

?>