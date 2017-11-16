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
                <a href="categories.php"> <button id="btCategoria">Categoria</button></a>
                <button  id="btnProduto"> Produto</button>
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
                      Aqui em breve terá o crud de produtos
            </div>
            <aside>
                <nav>
                    <!--<a href="gandalf_briefing.html">A Empresa</a>-->
                    <img src="images/LogoHippo.jpg" style="width: 315px;"/>
                    
                </nav>
            </aside>
            <?php include('../auth/controle.php');?>