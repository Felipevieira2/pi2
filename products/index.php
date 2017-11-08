<?php 
ini_set ('odbc.defaultlrl', 9000000);//muda configuração do PHP para trabalhar com imagens no DB
include('../db/conexao.php');
include('../auth/controle.php');
$consultaProdutos = odbc_exec($db, 'SELECT * FROM PRODUTO ');


while ($totalProdutos = odbc_fetch_array($consultaProdutos)) {
	$produto[$totalProdutos['idProduto']] = $totalProdutos;
}
//echo '<pre>';
include('templateProdNovo.php');


if (isset($_GET['btnCadastrarProd'])){
	echo "opa pai";
}

?>