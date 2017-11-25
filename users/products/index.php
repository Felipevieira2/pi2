<?php 
ini_set ('odbc.defaultlrl', 9000000);//muda configuração do PHP para trabalhar com imagens no DB
include('../db/conexao.php');
include('../auth/controle.php');
if(isset($_POST['pesquisaNome'])){
	    $pesquisaNomeProd = $_POST['pesquisaNome'];		
		$queryNomeProduto = "SELECT * FROM PRODUTO WHERE nomeProduto LIKE '%" .$pesquisaNomeProd. "%'";
		$stmt = odbc_exec($db, $queryNomeProduto);
		while ($totalProdutos = odbc_fetch_array($stmt)) {
		$produto[$totalProdutos['idProduto']] = $totalProdutos;
		}
		if(!isset($produto)){

			$erro = "Não foram encontrados itens!!!";
			$espErro = 1; // atenção não alterar faz parte da validação do sistema. // erro 1 não encontrados resultados
			include('templateProd.php');
		}else{
			$msg = "Sua pesquisa retornou os seguintes itens";
			include('templateProd.php');

		}
 		 		
	
}

if(isset($_GET['btnExcluirProd'])){
		$queryDelProd = 'DELETE produto WHERE idProduto = '.$_GET['btnExcluirProd']; 
   		if(isset($_GET['btnExcluirProd'])){
      		if(is_numeric($_GET['btnExcluirProd'])){
      			//select * from produto
    			if(odbc_exec($db, $queryDelProd)){
		        $msg = 'Produto removido com sucesso';            
		      	}else{
		    	$erro = 'erro ao excluir Produto';
		      	}
		    
		    }else{
		        $erro = 'Código inválido';
		    }
    	}
	}

if(!isset($_POST['pesquisaNome'])){
	$consultaProdutos = odbc_exec($db, 'SELECT * FROM PRODUTO ');
while ($totalProdutos = odbc_fetch_array($consultaProdutos)) {
	$produto[$totalProdutos['idProduto']] = $totalProdutos;
}
}

//funcionalidade gravar o produto no banco

if (isset($_POST['btnGravarCadProd'])){
	unset($_GET['prodCadastrar']);
	if(isset($_FILES['imagem'])){

	}
		$imagem = $_FILES['imagem'];
		$nome = $imagem['name'];
		$tipo = $imagem['type'];
		$tamanho = $imagem['size'];
		// Validações básicas
		// Formato
		if(!$imagem['error'] == 4){
			$conteudo = file_get_contents($imagem['tmp_name']);
		}else{
			$conteudo = null;
		}
		

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

			$msg = "Gravado com  sucesso!";
		}else{
			$msg = "Erro ao Gravar!";
		}
	}
if(isset($_GET['btnEditarProd'])){
	$idProduto = $_GET['btnEditarProd'];
	$queryEditProd = 'SELECT * FROM PRODUTO where idProduto = ' . $_GET['btnEditarProd'];
	$consultaProduto = odbc_exec($db,$queryEditProd);
		while ($dadosProduto = odbc_fetch_array($consultaProduto)) {
			$produto[$idProduto] = $dadosProduto;
		}
	$queryTodasCategorias = odbc_exec($db, 'SELECT idCategoria, nomeCategoria, 
		                descCategoria
		                FROM
		                
		                CATEGORIA'); //obtém as categorias disponíveis para cadastro. 

		while($r = odbc_fetch_array($queryTodasCategorias)){
			$categorias[$r['idCategoria']] = $r;
		}

	$queryCategoriaProduto = 'SELECT idCategoria, nomeCategoria, 
		                descCategoria
		                FROM
		                CATEGORIA WHERE 
		                idCategoria =' . $produto[$idProduto]['idCategoria'];
	$resultadoCatProduto = odbc_exec($db, $queryCategoriaProduto);
		 while($catProdutos = odbc_fetch_array($resultadoCatProduto)){
		 	$resulCatProd[$catProdutos['idCategoria']] = $catProdutos; 

		}
		
$idCategoriaProd =  $produto[$idProduto]['idCategoria'];
$nomeCategoriaProd = $resulCatProd[$idCategoriaProd]['nomeCategoria'];
}

//funcionalidade alterar cadastro do produto
if (isset($_POST['btnGravarAltProd'])){
	unset($_GET['btnEditarProd']);
	$precoProduto = floatval($_POST['precProduto']);
	$descontoPromocao = floatval($_POST['descontoPromocao']);
	$idCategoria = intval($_POST["idCategoria"]);
	$qtdMinEstoque = intval($_POST["qtdMinEstoque"]);
    $descProduto = utf8_decode($_POST['descProduto']);
    $nomeProduto = utf8_decode($_POST['nomeProduto']);
	$queryEditaProd = 'UPDATE produto SET 
	    nomeProduto=?,
		descProduto=?,
		precProduto=?,
		descontoPromocao=?,
		idCategoria=?,
		qtdMinEstoque=?
WHERE 
	idProduto = '.$idProduto;
	
$stmt = odbc_prepare($db, $queryEditaProd);
		if(odbc_execute($stmt,  array($nomeProduto,$descProduto,$_POST['precProduto'],
												$_POST['descontoPromocao'],
												$_POST['idCategoria'] , 
												$_POST['qtdMinEstoque'],
												))){
			$msg = "Dados atualizados";
			if(isset($_GET['btnAltImg'])){
				if(isset($_FILES['imagemAlt'])){
				$imagem = $_FILES['imagemAlt'];
				// Formato
				$conteudo = file_get_contents($imagem['tmp_name']);
				$queryAlteraImagem = "UPDATE produto SET imagem = ?
									  WHERE idProduto = " .$idProduto;

				$stmt = odbc_prepare($db, $queryAlteraImagem);					  

				if(odbc_execute($stmt, array($conteudo))){
					$msg = "Dados atualizados";

				}else{
					$erro = "Erro";
				}   
			}
		}
	
	}else{
		$erro = "erro";
	}
}
$consultaProdutos = odbc_exec($db, 'SELECT * FROM PRODUTO ');
while ($totalProdutos = odbc_fetch_array($consultaProdutos)) {
	$produto[$totalProdutos['idProduto']] = $totalProdutos;
}

if ((!isset($_GET['btnEditarProd'])) && (!isset($_GET['prodCadastrar']))){ //se não for acionado cadastro exibirá uma table com os produtos
	if(!isset($_POST['pesquisaNome']) && (!isset($_GET['btnPesquisaNome']))){
	include('templateProd.php');
}
	

}
//fim funcionalidade alterar produto


//funcionalidade cadastrar
if (isset($_GET['prodCadastrar'])){	

	$q = odbc_exec($db, 'SELECT idCategoria, nomeCategoria, 
	                  descCategoria
	                  FROM
	                  CATEGORIA'); //obtém as categorias disponíveis para cadastro. 

	while($r = odbc_fetch_array($q)){
	  $categorias[$r['idCategoria']] = $r;
	}
	include ('templateCadProd.php'); //adiciona o template de cadastro de produto
}


//fim funcionalidade cadastro de produto

if (isset($_GET['btnEditarProd'])){	
		include('templateEditProd.php');	
}
	


?>