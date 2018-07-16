<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/sections/contenido.view.php';
} else {
	header('Location: login.php');
}

?>