<?php
session_start();
if (!isset($_SESSION['idUsuario'])){
	header('Location: ..\index.php');
}

if (isset($_GET['menu'])){
	switch ($_GET['menu']) {
		case 'users':
				if (!isset($_GET["userCadastrar"]) && !isset($_GET["userEditar"])){
					header ('Location: ../users/index.php');  
				}
				
			break;
		case 'categories':
				if (!isset($_GET['catCadastrar']) && !isset($_GET['catEditar'])){
					header ('Location: ../cat/index.php');  
				}
			break;
		case 'products':
				if (!isset($_GET['prodCadastrar']) && !isset($_GET['prodEditar'])){
					header ('Location: ../products/index.php');  
				}
			break;
		default:
			# code...
			break;
	}
}
/*
if (isset($_GET['menu'])){
	if($_GET['menu'] == 'users'){
		if ($_GET['userCadastrar']){

		}
	  	header ('Location: ../users/index.php');  
	}

	if ($_GET['menu'] == 'categories'){
		header ('Location: ../cat/.php');  
	}

	if ($_GET['menu'] == 'products'){
		header ('Location: ../products/index.php');  
	}
*/
?>