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
                <a href="users.php"> <button id="btnUsuario"> Usuario</button></a> 
                <button id="btCategoria">Categoria</button>
                <a href="products.php"><button  id="btnProduto"> Produto</button></a>
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
                      <table border="1">
                        <tr>
                            <th>Cabeçalho</th>
                            <th>Outro Cabeçalho</th>
                        </tr>
                        
                        <tr>
                            <td>linha 1, célula 1</td>
                            <td>linha 1, célula 2</td>
                        </tr>

                        <tr>
                            <td>linha 2, célula 1</td>
                            <td>linha 2, célula 2</td>
                        </tr>
                        </table>
            </div>
            <aside>
                <nav>
                    <!--<a href="gandalf_briefing.html">A Empresa</a>-->
                    <img src="images/LogoHippo.jpg" style="width: 315px;"/>
                    
                </nav>
            </aside>

<?php include('../auth/controle.php');?>