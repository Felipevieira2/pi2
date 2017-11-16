<?php 
ini_set ('odbc.defaultlrl', 9000000);//muda configuração do PHP para trabalhar com imagens no DB
include('../db/conexao.php');
include('../auth/controle.php');
$consultaProdutos = odbc_exec($db, 'SELECT * FROM PRODUTO ');


while ($totalProdutos = odbc_fetch_array($consultaProdutos)) {
	$produto[$totalProdutos['idProduto']] = $totalProdutos;
}
//echo '<pre>';



if (isset($_GET['prodCadastrar'])){
	$q = odbc_exec($db, 'SELECT idCategoria, nomeCategoria,
	                  descCategoria
	                  FROM
	                  CATEGORIA');

	while($r = odbc_fetch_array($q)){
	  $categorias[$r['idCategoria']] = $r;
	}
	include ('templateCadProd.php');
}
if (!isset($_GET['prodCadastrar'])){
	include('templateProd.php');
}
if(isset($_POST['btnGravar'])){
	unset($_GET['prodCadastrar']);
	if (isset($_POST['btnGravar'])){
		$imagem = $_FILES['imagem'];
		$nome = $imagem['name'];
		$tipo = $imagem['type'];
		$tamanho = $imagem['size'];
		// Validações básicas
		// Formato
		if(!preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp)$/', $tipo))
		{
		    $msg = 'Isso não é uma imagem válida';
		    exit;
		}
		$conteudo = file_get_contents($imagem['tmp_name']);
		$precoProduto = floatval($_POST['precProduto']);
		$descontoPromocao = floatval($_POST['descontoPromocao']);
		$idUsuario = intval($_SESSION['idUsuario']);
		$idCategoria = intval($_POST["idCategoria"]);
		$qtdMinEstoque = intval($_POST["qtdMinEstoque"]);
		$insertProduto = 'INSERT INTO PRODUTO (nomeProduto,
												descProduto,
												precProduto,
												descontoPromocao,
												idCategoria,
												ativoProduto,
												idUsuario,
												qtdMinEstoque,
												imagem) 
						VALUES (?,--nomeProduto
								?,--descProduto
								 ?,--precProduto
								 ?,--descontoPromocao
								 ?,--idCategoria
								 ?,--ativoProduto
								 ?,--idUsuario
								 ?,--qtdMinEstoque
								 ?)--imagem';
		$stmt = odbc_prepare($db,$insertProduto);

		if(odbc_execute($stmt, array ($_POST["nomeProduto"],
									 $_POST["descProduto"],
									 $precoProduto,
									 $descontoPromocao,
									 $idCategoria,
									  1,
									 $idUsuario,
									 $qtdMinEstoque,
									 $conteudo) 
			)){

			echo $msg = "Gravado com  sucesso!";
		}else{
			echo $msg = "Erro ao Gravar!";
		}
	}	
}

?>