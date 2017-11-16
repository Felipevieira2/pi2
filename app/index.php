<?php
include('db/bancoDeDados.php');

if (isset($_Get['logout'])){
	session_start();
	session_destroy();
}

$login = isset($_POST['login']) ? $_POST['login'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

if(!empty($login) && !empty($senha));{

$stmt = odbc_prepare($db, ' SELECT 	idUsuario,
									nomeUsuario
							FROM Usuario
							WHERE loginUsuario = ?
							AND senhaUsuario = ?');

odbc_execute($stmt, array($login, $senha));

$Usuario = odbc_fetch_array($stmt);

if (!$usuario['idUsuario']){

	$msg = 'Login e/ou Senha Incorretos';

	}else{

		session_start();
		$SESSION['idUsuario'] = $usuario['idUsuario'];
		$SESSION['nomeUsuario'] = $usuario['nomeUsuario'];

		header('location: menu/');
	}
}

include ('template.php');
?>