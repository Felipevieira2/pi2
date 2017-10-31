<?php 
include('../db/conexao.php');
include('../auth/controle.php');
//Inicio funcionalidade incluir o formulário de cadastro
if(isset($_GET['catCadastrar'])){	

	//Funcionalidade cadastrar nova categoria
	if (isset($_POST['btnGravar'])){ 
		unset($_GET['catCadastrar']); //se for acionado o btn gravar é resetado o get catCadastrar
		if(!empty($_POST['nomeCategoria'])){
		  $stmt = odbc_prepare($db, "INSERT INTO categoria (nomeCategoria,descCategoria)
		  						VALUES 
		  						(?,?)

		  							");	
		  if(odbc_execute($stmt, array ($_POST['nomeCategoria'], $_POST['descCategoria']))){
		  	$msg = 'Categoria Gravada com sucesso!';

		  }
		  else{
		  	$erro = 'não foi possível gravar!!!';
		  }

		}
		else{
			$erro = "Campo obrigatório: Nome da categoria.";
		}
	}
//Fim funcionalidade cadastrar nova categoria

	if (isset($_GET['catCadastrar'])){ //verifica se o catCadastro já foi resetado 
		include('categoriaCadastrar.php');
	}

}
//Fim funcionalidade incluir o formulário de cadastro

//Inicio funcionalidade editar 
if (isset($_GET['catEditar'])){
	//Funcionalidade Listar categorias
	$q = odbc_exec($db, 'SELECT idCategoria, nomeCategoria,
	                  descCategoria
	                  FROM
	                  CATEGORIA');

	while($r = odbc_fetch_array($q)){
	  $categorias[$r['idCategoria']] = $r;
	}
//Fim Funcionalidade Listar categorias
	$dadosCategoria = $categorias[$_GET['catEditar']];
	if (isset($_POST['btnEditar'])){
		unset($_GET['catEditar']);
		if(!empty($_POST['nomeCategoria'])){
		   $stmt = odbc_prepare($db, "UPDATE categoria SET 
		            nomeCategoria=?,
		            descCategoria=?
		            WHERE idCategoria = ?");
		   if(odbc_execute($stmt,   array($_POST['nomeCategoria'],
		   	                              $_POST['descCategoria'],
		   	                              $_POST['idCategoria'])));{
		   	$msg = "Categoria atualizada com sucesso";
		   }	
		}else{
		   	$erro = "nome da categoria requerido!";

		   }
}

	if(!isset($_POST['btnEditar'])){
	    include ('categoriaEditar.php');

	}


}
if (isset($_GET['catExcluir'])){
	if (is_numeric($_GET['catExcluir'])){
		if(odbc_exec($db, "DELETE categoria 
			WHERE idCategoria = 
			{$_GET['catExcluir']}")){
			$msg = "Categoria excluída com sucesso!";

		}else{
			$erro ="Erro ao excluir categoria";
		}
	}else{
		$erro = "Erro, operação inválida!";
	}
}
//fim funcionalidade editar
if (!isset($_GET['catCadastrar']) && !isset($_GET['catEditar'])){ //lista os Usuários
	
	//Funcionalidade Listar categorias
$q = odbc_exec($db, 'SELECT idCategoria, nomeCategoria,
                  descCategoria
                  FROM
                  CATEGORIA');

while($r = odbc_fetch_array($q)){
  $categorias[$r['idCategoria']] = $r;
}
//Fim Funcionalidade Listar categorias

include('templateCat.php');
}

?>