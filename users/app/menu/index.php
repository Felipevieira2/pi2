
<?php
include('../db/bancoDeDados.php');
include('../auth/controle.php');

//Funcionalidade Gravar Cadastro
if(isset($_POST['btnGravar'])){
	if(	!empty($_POST['loginUsuario']) &&
		!empty($_POST['nomeUsuario'])  &&
		!empty($_POST['senhaUsuario'])){

		$_POST['usuarioAtivo'] =
			isset($_POST['usuarioAtivo']) ? true : false;
		
		$stmt = odbc_prepare($db, "	INSERT INTO 
												Usuario
											SET
												
												loginUsuario = ?,
												nomeUsuario = ?,
												senhaUsuario = ?,
												tipoPerfil = ?,
												usuarioAtivo = ?,
											WHERE
												idUsuario = ?");

		if(odbc_execute($stmt, array(	$_POST['loginUsuario'],
										$_POST['nomeUsuario'],
										$_POST['senhaUsuario'],
										$_POST['tipoPerfil'],
										$_POST['usuarioAtivo'],))){
			$msg = 'Usuário gravado com sucesso!';			
		}else{
			$erro = 'Erro ao gravar o usuário';
		}
										
							
	}else{
		
			$erro = 'Os campos: Login, Nome e Senha 
					são obrigatórios';
		
	}
}
//FIM Funcionalidade Gravar Cadastro

//Funcionalidade Editar Cadastro
if(isset($_POST['btnAtualizar'])){
	if(	!empty($_POST['loginUsuario']) &&
		!empty($_POST['nomeUsuario'])  &&
		!empty($_POST['senhaUsuario'])){

		$_POST['usuarioAtivo'] =
			isset($_POST['usuarioAtivo']) ? true : false;
		
		$stmt = odbc_prepare($db, "	UPDATE 
										Usuario
									SET
										loginUsuario = ?,
										nomeUsuario = ?, 
										senhaUsuario = ?,
										tipoPerfil = ?,
										usuarioAtivo = ?)
									where
										idUsuario = ?");
		if(odbc_execute($stmt, array(	$_POST['loginUsuario'],
										$_POST['nomeUsuario'],
										$_POST['senhaUsuario'],
										$_POST['tipoPerfil'],
										$_POST['usuarioAtivo'],
										$_POST['idUsuario']))){
		$msg = 'Usuário atualizado com sucesso!';			
		}else{
			$erro = 'Erro ao atualizar o usuário';
		}
										
							
	}else{
		
			$erro = 'Os campos: Login, Nome e Senha 
					são obrigatórios';
		
	}
}
//FIM Funcionalidade Editar Cadastro

//Funcionalidade Listar
$q = odbc_exec($db, 'SELECT idUsuario, loginUsuario,
							nomeUsuario, tipoPerfil,
							usuarioAtivo
					 FROM
							Usuario');

while($r = odbc_fetch_array($q)){
	$Usuarios[$r ['idUsuario']] = $r;

}
//Fim Funcionalidade Listar

//Funcionalidade FORM Cadastrar
if(isset($_GET['Cadastrar'])){

	incluide('template_cadastrar.php');
}elseif (isset(var)) {
	# code...
}{

}

//Fim Funcionalidade FORM Cadastrar

include ('template.php');
?>