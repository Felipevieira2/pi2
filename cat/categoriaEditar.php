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
        <div id="feature">
            <div id="content">
                <div id="tableDados" align="center">

                    Editando categoria
                    <form method="POST">
                    Nome <input type="text" value="<?php echo $dadosCategoria['nomeCategoria']?>" name="nomeCategoria"> <br><br>
                    Descrição<input type="text" value="<?php echo $dadosCategoria['descCategoria']?>" name="descCategoria"><br><br>
                    <input type="hidden" name="idCategoria" 
                                        value="<?php echo $dadosCategoria['idCategoria']; ?>">  
                    <input type="submit" value="Enviar" name="btnEditar">
                    </form>

                   
                </div>
            </div>    
            <aside>
                <nav>
                	
                
                    
                </nav>
			</aside>