<!DOCTYPE html>
<html>
    <head>

        <title>Hippo Mercado</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="..\css\estilo.css"></head>
        

    <body bgcolor="#FFFFFF">
            
        <div id="colorstrip1">
			
        </div>
        <div id="colorstrip2"><div id="menuAdmin">
				<a href="index.php?menu=users"> <button id="btnUsuario"> Usuario</button></a> 
				<a href="..\cat\index.php?menu=categorias"> <button id="btCategoria">Categoria</button></a>
				<a href="index.php?menu=products"><button  id="btnProduto"> Produto</button></a>
				<a href='#'><button  id="btnConta">   Minha conta</button></a>
				<a href='..\logout.php'><button id="btnSair">Sair</button></a>
			</div>
            <div id="divBusca">
                  <img src="images/procura.png" alt="Buscar..."/>
                  <input type="text" id="txtBusca" placeholder="Buscar..."/>
                  <button id="btnBusca">Buscar</button>
            </div>
        </div>
        <div id="feature">
            <div id="content">
                <div id="tableDados">
                <a href="?menu=users&userCadastrar=1">+ Usuário</a>
    <br>        
                  <?php //exibe Usuarios 
                    if(isset($erro)){
                      echo $erro;
                    }

                      if (isset($msg)){
                        echo $msg;
                      } 
                      ?>
    		        <TABLE width="800" border='1'>
                        <TR>
                            <TD align=center>ID</TD>
                            <TD align=center>Login</TD>
                            <td>Nome</td>
                            <td>Perfil</td>
                            <td>Ativo</td>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </TR>


                        <?php
                        
                        foreach ($usuarios as $idUsuario => $dadosUsuario) {
                            //exibe Usuarios em uma tabela 
                               echo " <tr>
                                  <td align=center>$idUsuario</td>
                                  <td>{$dadosUsuario['loginUsuario']}</td>
                                  <td>{$dadosUsuario['nomeUsuario']}</td>
                                  <td align=center bgcolor=>{$dadosUsuario['perfilUsuario']}</td>
                                  <td align=center background=>{$dadosUsuario['usuarioAtivo']}</td>
                                  <td align=center background=><a href='?menu=users&userEditar=$idUsuario'>E</a></td>
                                  <td align=center><a href='?menu=users&excluir=$idUsuario'>X</a></td>
                                    </tr>";


                            }
                
                     

                        ?>
                    </TABLE>
                </div>
            </div>    
            <aside>
                <nav>
                	<!--<a href="gandalf_briefing.html">A Empresa</a>-->
                
                    
                </nav>
			</aside>