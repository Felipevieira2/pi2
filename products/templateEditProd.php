<!DOCTYPE html>
<html>
    <head>
        <title>Gandalf Store</title>
        <link rel="stylesheet" type="text/css" href="..\css\estilo.css"></head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="..\js\custom.css" media="screen">
        <meta name="robots" content="noindex, nofollow"> 
        <title>Gandalf Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script type="text/javascript" src="../js/bootstrap.js"></script>

        <link media="all" type="text/css" rel="stylesheet" href="https://bootsnipp.com/css/fullscreen.css">
        <link media="all" type="text/css" rel="stylesheet" href="../css/estilo1.css">
        <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
            MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Administrator
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">      
            <form class="navbar-form navbar-left" method="GET" role="search">
                <div class="form-group">
                    <input name="q" class="form-control" placeholder="Search" type="text">
                </div>
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Logout
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">SETTINGS</li>
                            <li class=""><a href="#">Other Link</a></li>
                            <li class=""><a href="#">Other Link</a></li>
                            <li class=""><a href="#">Other Link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>      <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
    <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="">
                            <span class="glyphicon glyphicon-dashboard"></span>Menu
                        </a>
                    </li>

                    <li>
                        <a href="..\users\index.php?menu=users">
                            <span class="glyphicon glyphicon-plane"></span>Usuários
                        </a>
                    </li>

                    <li>
                        <a href="..\cat\index.php?menu=categories">
                            <span class="glyphicon glyphicon-cloud"></span> Categorias
                        </a>
                    </li>

                    <li><a href="..\products\index.php?menu=products">
                        <span class="glyphicon glyphicon-cloud"></span> Produtos
                        </a>
                    </li>
                     
                </ul>
                 <center>
                     <img id="logo" width="220px" src="../images/GandalfLOGO.jpg" />
                 </center>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
</div>          </div>
        <div class="col-md-10 content">
              <div class="panel panel-default">
    <div class="panel-heading">
        Cadastro de produtos
    </div>
    <div class="panel-body">
        
        <center>
            <h1>Alteração de Produto</h1>
        </center>
        <div id="pager" class="pager">
            
            <form method= "POST" enctype="multipart/form-data">
                <center>
                    <p>
                    <label>Produto:</label>  
                        <input class="formInput inputBorder" type="text" name="nomeProduto" 
                        value='<?php echo utf8_encode($produto[$idProduto]['nomeProduto']);?>' >
                

                    
                    <label>Descrição: </label> 
                    <textarea rows="10" cols="90" class="formInput inputBorder" name="descProduto"><?php echo utf8_encode($produto[$idProduto]['descProduto']);?></textarea>
                       
                    </p>
                </center>
                  
                        
                    
                

                <p> 
                    <label>Preço: </label> 
                    <input class="formInput inputBorder campoTamanhoSmall noBlock" type="number" max="10000.00" step="0.01" name="precProduto" value='<?php echo $produto[$idProduto]['precProduto'];?>'>
                    <label> Desconto: </label>
                                                   
                    <input class="formInput inputBorder campoTamanhoSmall noBlock"  type="text" name="descontoPromocao" 
                    value='<?php echo $produto[$idProduto]['descontoPromocao'];?>'>
                    <label> Categoria:</label> 
                          <select name="idCategoria">
                              <?php echo "<option value='{$idCategoriaProd}'>
                                            {$nomeCategoriaProd}
                                        </option>";
                              ?>          
                              <?php 
                              foreach ($categorias as $idCategoria => $dadosCategoria) {
                                echo "<option value='{$dadosCategoria["idCategoria"]}'>
                                    {$dadosCategoria["nomeCategoria"]} 
                                    </option>";
                               
                              }
                              ?>
                          </select>
                          
                </p>

                <p>
                    <label> Qtd Minima de estoque:</label>
                          <input type="text"  class="formInput campoTamanhoSmall inputBorder noBlock" name="qtdMinEstoque" value='<?php echo $produto[$idProduto]['qtdMinEstoque'];?>'>
                    <label>Imagem atual: </label>
                    <?php
                    $img = base64_encode($produto[$idProduto]['imagem']);
                    echo '<img src="data:image/jpeg;base64,'.$img.'" style="width: 150px;" />'; 
                    
                    ?>
                </p>
                    
                    
                <?php 
                if(isset($_GET['btnAltImg'])){
                echo'<label>
                        Selecione a imagem
                    </label>
                    <input type="file" name="imagemAlt"/>';
                }
                    ?>
                 
                <span class="botao">
                <a href="?menu=products">Voltar</a>
                </span>
                <span class="botao"><?php 
                echo "<a href='?btnEditarProd=$idProduto&btnAltImg=1'>Alterar imagem</a>"
                ?>
                </span>
                <input class="botao" type="submit" value="Gravar" name="btnGravarAltProd">
      
                </form>
                 
                    
                       
                    

         
        </div>
    
    </div>
</div>
        </div>
        <footer class="pull-left footer">
            <p class="col-md-12">
                </p>
            <hr class="divider">
            <p> 
                <center>
                        Copyright © 2017 - Felipe Erivaldo Vieira Barros - Sistemas para Internet.
                </center>
                </p>
        </footer>
    </div>



            
           
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="..\js\jquery.tablesorter.min.js"></script>
        <script src="..\js\jquery.tablesorter.pager.js"></script>
        <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
        <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

    </body>
</html>
