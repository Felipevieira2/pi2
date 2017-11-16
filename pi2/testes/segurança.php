<?php 
session_start();
$usuario =null;
$senha = '';
if (!isset($_SESSION['usuario']))//verificando se o session está setado 
{ 	
	if (isset($_POST['usuario'])) 
	{ //verifica se o metodo post está setado
		$usuario = $_POST['usuario'];//variável recebe o valor do post
	}
	if (isset($_POST['senha']))
	{
		$senha = $_POST['senha']; //variável recebe o valor do post

	}

	include 'parametros.php';
	foreach ($logins as $chave => $valor) 
	{
		if (($usuario == $chave) && ($senha == $valor))
		{
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			break;
		}

	}	
	if ((isset($_POST['usuario'])) && (!isset($_SESSION['senha'])))
	{
		echo'Senha inválida';
	}
			
			


} 
if ($_SESSION['usuario')){
header('home.php');
}

?>





