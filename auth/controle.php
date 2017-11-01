<?php
session_start();
if (!isset($_SESSION['idUsuario'])){
	header('Location: ..\index.php');
}

if (isset($_GET['menu'])){
	if($_GET['menu'] == 'users'){
	  	header ('Location: ../users/');  
	}

	if ($_GET['menu'] == 'categories'){
		header ('Location: ../cat/');  
	}

	if ($_GET['menu'] == 'products'){
		header ('Location: ../products/');  
	}
}
?>