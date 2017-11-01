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
                		<?php 
                		if(isset($erro)){
                			echo $erro;
                		}

	                		if (isset($msg)){
	                			echo $msg;
	                		}	
                			?>
						<form method="post">

							Login: <input type="text" name="loginUsuario" value="<?php echo $dadosUsuario['loginUsuario']; ?>"><br><br>
							Senha: <input type="password" name="senhaUsuario"><br><br>
							Nome:  <input type="text" name="nomeUsuario" value="<?php echo $dadosUsuario['nomeUsuario']; ?>"><br><br>
						    Perfil: <select name="perfilUsuario">
										<option value="">Escolha</option>
										<option value="A" 
										<?php if($dadosUsuario['perfilUsuario'] == 'A') echo "selected"; ?>>Administrador</option>
										<option value="C" <?php if($dadosUsuario['perfilUsuario'] == 'C'){echo "selected";}?> >Colaborador</option>
									</select><br><br>
							Ativo: <input type="checkbox" name="usuarioAtivo" <?php if($dadosUsuario['usuarioAtivo'] == 1) echo "checked"; ?>><br><br>
									<input type="hidden" name="idUsuario" 
										value="<?php echo $dadosUsuario['idUsuario']; ?>">		
									<input type="submit" value="Atualizar" name="btnAtualizar">
								
								</form>
		</div>
            </div>    
            <aside>
                <nav>
                	<!--<a href="gandalf_briefing.html">A Empresa</a>-->
                
                    
                </nav>
			</aside>
