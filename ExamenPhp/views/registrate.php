<?php session_start();

if (isset($_SESSION['nombre'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$rut = filter_var(strtolower($_POST['rut']), FILTER_SANITIZE_STRING);
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
	$direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$errores = '';

	if (empty($rut) or empty($nombre) or empty($email) or empty($direccion) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=bbddisp', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM particular WHERE rut = :rut LIMIT 1');
		$statement->execute(array(':rut' => $rut));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li>El rut de usuario ya existe</li>';
		}

		

		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO particular (rut, nombre, email, direccion, password) VALUES (:rut, :nombre, :email, :direccion, :password)');
		$statement->execute(array(
			':rut' => $rut,
			':nombre' => $nombre,
			':email' => $email,
			':direccion' => $direccion,
			':password' => $password



		));
		echo '<script language="javascript">alert("Ingreso Exitoso");</script>'; 

		header('Location: login.php');
	}
}

require 'sections/registrate.view.php';

?>