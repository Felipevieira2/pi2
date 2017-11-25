<?php
session_start();
include('db/conexao.php');
$login = isset($_POST['login']) ? $_POST['login'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
if (isset($_POST['login']) && (isset($_POST['senha']))){
	$stmt = odbc_prepare($db, 'Select idUsuario,nomeUsuario
							   FROM usuario 
							   WHERE 
							   LoginUsuario = ? 
							   AND
							   senhaUsuario = ?'          );
	//$stmt = odbc_prepare($db,'SELECT nomeUsuario' )

	odbc_execute($stmt, array($login,$senha));
	$usuario = odbc_fetch_array($stmt);
	if(!$usuario['idUsuario']){
		$msg = '<h4>Login e/ou Senha Incorreta</h4>';
	}
	else{
	    
	    $_SESSION['idUsuario'] = $usuario['idUsuario'];
	    $menu=='users';
	    header('Location: /menu/index.php');
	}

}
if (isset($_SESSION['idUsuario'])){
	
	header('Location: ../users/index.php');
}

include('template.php');

                                     
                                       
?>