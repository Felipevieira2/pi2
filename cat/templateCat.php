<!DOCTYPE html>
<html>
    <head>

        <title>Gandalf</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="..\css\estilo.css"></head>
        

    <body bgcolor="#FFFFFF">
            
        <div id="colorstrip1">
			
        </div>
        <div id="colorstrip2"><div id="menuAdmin">
				<a href="..\users\index.php?menu=users"> <button id="btnUsuario"> Usuario</button></a> 
				<a href="..\cat\index.php?menu=categorias"> <button id="btCategoria">Categoria</button></a>
				<a href="index.php?menu=products"><button  id="btnProduto"> Produto</button></a>
				<a href='#'><button  id="btnConta">   Minha conta</button></a>
				<a href='..\logout.php'><button id="btnSair">Sair</button></a>
			</div>
            <div id="divBusca">
                  <img src="images/Procura.png" alt="Buscar..."/>
                  <input type="text" id="txtBusca" placeholder="Buscar..."/>
                  <button id="btnBusca">Buscar</button>
            </div>
        </div>
  
            <div id="content">
                <div id="tableDados">
                <a href="?menu=categoria&catCadastrar=1"> Adicionar categoria</a>
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
                            <td>Nome</td>
                            <td>Descrição</td>
                            
                        </TR>


                        <?php
                        
                        foreach ($categorias as $idCategoria => $dadosCategorias) {
                            //exibe Usuarios em uma tabela 
                               echo " <tr>
                                  <td align=center>$idCategoria</td>
                                  <td>{$dadosCategorias['nomeCategoria']}</td>
                                  <td>{$dadosCategorias['descCategoria']}</td>
                                  <td align=center> <a href='?menu=categorias&catEditar=$idCategoria'>Editar</a></td>
                                  <td align=center><a href='?menu=categorias&catExcluir=$idCategoria'>Excluir</a></td>
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