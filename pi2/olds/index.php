<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
require('bancoDeDados.php');

if(isset($_POST['nome'])){
	odbc_exec ($db, "INSERT INTO usuario (nome) 
	VALUES ( '{$_POST['nome'] }' )");

		$strNome = "{$_POST['nome']}";
}
	

include('template.php');

?>
