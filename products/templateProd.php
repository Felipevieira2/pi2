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
				<a href="..\users\index.php?menu=users"> <button id="btnUsuario"> Usuario</button></a> 
				<a href="..\cat\index.php?menu=categories"> <button id="btCategoria">Categoria</button></a>
				<a href="..\products\index.php?menu=products"><button  id="btnProduto"> Produto</button></a>
				<a href='#'><button  id="btnConta">   Minha conta</button></a>
				<a href='..\logout.php'><button id="btnSair">Sair</button></a>
			</div>
            <div id="divBusca">
                  <img src="images/procura.png" alt="Buscar..."/>
                  <input type="text" id="txtBusca" placeholder="Buscar..."/>
                  <button id="btnBusca">Buscar</button>
            </div>
        </div>

            <div id="content" cellpadding="1000px" cellspacing="4"> 
                
                <div id="tableDados">
                 <TABLE border='1'>
                        <TR>
                            <td>Produto</td> 
                            <td>Imagem</td>
                            <td>Preço</td>
                            <td>Ativo</td>
                           
                        </TR>
                <?php 

                foreach ($produto as $idProduto => $dadosProduto) {
                    $img = base64_encode($dadosProduto['imagem']);
                                             // <td style='width:400px;' id='teste'>${dadosProduto["descProduto"]}</td>
                    echo "<tr>
                          <td>${dadosProduto["nomeProduto"]}</td>
                          "                         
                          .

                          '<td>
                          <img src="data:image/jpeg;base64,'.$img.'" style="width: 150px;"/>
                          </td>'.
                         " <td>${dadosProduto["precProduto"]}</td>";

                          if ($dadosProduto["ativoProduto"] == 1){
                            echo "<td>Ativo</td> </td>"; 
                          }else
                          {
                            echo "<td>Inativo</td></td>";
                          }

                                              
                }
             

                ?>
                </table>
                </div>
            </div>
            <aside>
                <nav>
                	<!--<a href="gandalf_briefing.html">A Empresa</a>-->
                    <img src="images/LogoHippo.jpg" style="width: 315px;"/>
                    
                </nav>
			</aside>