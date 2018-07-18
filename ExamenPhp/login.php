<?php session_start();

if (isset($_SESSION['rut'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$rut = filter_var(strtolower($_POST['rut']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
 
	header('Location: manejadorParticular.php?accion=login&rut='.$rut.'&password='.$password);
 /*
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=bbddisp', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}


	$statement = $conexion->prepare('SELECT codigo, rut, password FROM particular WHERE rut = :rut AND password = :password');

	$statement->execute(array(
		':rut' => $rut,
		':password' => $password
	));



	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['rut'] = $rut;
		
		header('Location: manejadorParticular.php?accion=crudEditar&codigo=<?php echo $cod;?>');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}*/
}

require 'views/sections/login.view.php';

?>