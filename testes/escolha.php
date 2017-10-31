<?php 
session_start();
include 'parametros.php';
switch ($_GET['op']) {
	case 't':
		$_SESSION['UserGenero'] = "Terror";
		break;
	case 'd':
		$_SESSION['UserGenero'] = "Drama";
		break;
	default:
		# code...
		break;
}
echo "Olá, Sr(a) {$_SESSION['usuario']} <br>  Gênero {$_SESSION['UserGenero']} Selecionado <br> Selecione um filme: <br><br><br>";


if ($_GET['op'] == 't')
{	
	
	for ($i=0; $i < count($terror); $i++)
	{	
		echo "<a href='escolha2.php?tf=t&filme=$i'>$terror[$i]</a>";
		echo "<br>";

	}


}
if ($_GET['op'] == 'd')
{	
	for ($i=0; $i < count($terror); $i++)
	{	
		echo "<a href='escolha2.php?tf=d&filme=$i'>$drama[$i]</a>";
		echo "<br>";
	}


}

echo "<br> <a href='login.php'> Voltar </a>";
echo "<br> <a href='logout.php'> Sair </a>";
?>