<?php
include('../db/conexao.php');
include('../auth/controle.php');

//Funcionalidade Listar
if (isset($_GET['excluir'])){
    //Funcionalidade Excluir
    if(isset($_GET['excluir'])){
      if(is_numeric($_GET['excluir'])){
    
      if(odbc_exec($db, " DELETE FROM 
                  Usuario 
              WHERE
                idUsuario = {$_GET['excluir']}")){
        $msg = 'Usuário removido com sucesso';            
      }else{
      $erro = 'Erro ao excluir o usuário';
      }
    
      }else{
        $erro = 'Código inválido';
      }
    }

}//FIM Funcionalidade Excluir
$q = odbc_exec($db, 'SELECT idUsuario, loginUsuario,
                  nomeUsuario, perfilUsuario,
                  usuarioAtivo
                  FROM
                  Usuario');
while($r = odbc_fetch_array($q)){
  $usuarios[$r['idUsuario']] = $r;
}
//fim listar


if(isset($_POST['btnGravar'])){
      unset($_GET['userCadastrar']);
      if( !empty($_POST['loginUsuario']) &&
        !empty($_POST['nomeUsuario']) &&
        !empty($_POST['senhaUsuario'])){
          $_POST['usuarioAtivo'] = isset($_POST['usuarioAtivo']) ? true : false;
          $_POST['usuarioAtivo'] = (int) $_POST['usuarioAtivo'];
          $stmt = odbc_prepare($db, "INSERT INTO Usuario
                        (loginUsuario,
                        nomeUsuario,
                        senhaUsuario,
                        perfilUsuario,
                        usuarioAtivo)
                        VALUES
                        (?,?,?,?,?)");
            if(odbc_execute($stmt, array($_POST['loginUsuario'],
                            $_POST['nomeUsuario'],
                            $_POST['senhaUsuario'],
                            $_POST['perfilUsuario'],
                            $_POST['usuarioAtivo']))){
              $msg = 'Usuário gravado com sucesso!';      
            }else{
              $erro = 'Erro ao gravar o usuário';
            }               
              
      }else{
    
    $erro = 'Os campos: Login, Nome e Senha 
          são obrigatórios';
    
  }
}
//FIM Funcionalidade Gravar Cadastro de Usuarios 


//Funcionalidade userEditar Cadastro de Usuários
if(isset($_POST['btnAtualizar'])){
  unset($_GET['userEditar']);
  if( !empty($_POST['loginUsuario']) &&
    !empty($_POST['nomeUsuario']) &&
    !empty($_POST['senhaUsuario'])){
    $_POST['usuarioAtivo'] = isset($_POST['usuarioAtivo']) ? true : false;
    $_POST['usuarioAtivo'] = (int) $_POST['usuarioAtivo'];
    $stmt = odbc_prepare($db, " UPDATE 
                    Usuario
                  SET 
                    loginUsuario = ?,
                    nomeUsuario = ?,
                    senhaUsuario = ?,
                    perfilUsuario = ?,
                    usuarioAtivo = ?
                  WHERE
                    idUsuario = ?");
                  
    if(odbc_execute($stmt, array( $_POST['loginUsuario'],
                    $_POST['nomeUsuario'],
                    $_POST['senhaUsuario'],
                    $_POST['perfilUsuario'],
                    $_POST['usuarioAtivo'],
                    $_POST['idUsuario']))){
      $msg = 'Usuário atualizado com sucesso!'; 
      unset($_GET['userEditar']);  

    }else{
      $erro = 'Erro ao atualizar o usuário';
      unset($_GET['userEditar']);

    }               
              
  }else{
    
    $erro = 'Os campos: Login, Nome e Senha 
          são obrigatórios';
          unset($_GET['userEditar']);
    
  }

}
if (!isset($_GET['userCadastrar']) && !isset($_GET['userEditar'])){
    include('/templateUsuario.php');
  }
//form EDITAR
if(isset($_GET['userEditar'])){
  $dadosUsuario = $usuarios[$_GET['userEditar']]; 
  include('../users/usuariosEditar.php');
      
}
  
//Funcionalidade Gravar Cadastro
if(isset($_GET['userCadastrar'])){//FORM userCadastrar Usuarios

      include ('../users/usuarioCad.php');
      
  }


?>
  

