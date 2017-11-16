<?php
session_start();
include('parametros.php');

if ($_GET['tf']=='d'){
	echo "Olá usuário: {$_SESSION['usuario']}, você escolheu o gênero: {$tipofilme[$_GET['tf']]}
	e o filme: {$drama[$_GET['filme']]}";

}
if ($_GET['tf']=='t'){
echo "Olá usuário: {$_SESSION['usuario']}, você escolheu o gênero: {$tipofilme[$_GET['tf']]}
e o filme: {$terror[$_GET['filme']]} ";
}

echo "<br> <a href='logout.php'> Sair </a>";
echo "<br> <a href='login.php'> Volta para escolhas</a>";
?>