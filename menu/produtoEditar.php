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
				<a href="index.php?menu=users"> <button id="btnUsuario"> Usuario</button></a> 
				<a href="index.php?menu=categories"> <button id="btCategoria">Categoria</button></a>
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
		               <TR>
                            <TD align=center>ID</TD>
                            <td>Produto</td>
                            <td>Descrição</td>
                            <td>Preço</td>
                            <td>Desconto</td>
                            <td>Código Categoria</td>
                            <td>Descrição</td>
                            <td>Ativo</td>
                            <td>Usuário</td>
                            <td>QTD MIN</td>
                            <td>Imagem</td>
                        </TR>  
            </div>
            <aside>
                <nav>
                	<!--<a href="gandalf_briefing.html">A Empresa</a>-->
                    <img src="images/LogoGandalf.jpg" style="width: 315px;"/>
                    
                </nav>
			</aside>
        </div>
    </body>
</html>