<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../images/Gandalflogo.jpg" type="image/x-icon"/>
        <link rel="shortcut icon" href="../images/Gandalflogo.jpg" type="image/x-icon"/>
        <title>Gandalf Store</title>
        <link rel="stylesheet" type="text/css" href="..\css\estilo.css"></head>
        <meta charset="utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="..\js\jquery.tablesorter.min.js"></script>
        <script src="..\js\jquery.tablesorter.pager.js"></script>
        <link rel="stylesheet" href="..\js\custom.css" media="screen"Store
        <meta name="robots" content="noindex, nofollow"> 
        <title>Gandalf Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <link media="all" type="text/css" rel="stylesheet" href="https://bootsnipp.com/css/fullscreen.css">
        <link media="all" type="text/css" rel="stylesheet" href="../css/estilo1.css">
        <script type="text/javascript" src="../js/bootstrap.js"></script>
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
                    <a href="../logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Logout
                        </a>
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
             <?php if(isset($msg)){echo $msg;}
                   if(isset($erro)){echo $erro;} 
             ?>

            <form method="post" action="index.php" id="frm-filtro">

                <p> 
                    <label for="pesquisar">Pesquisar</label>
                    <input type="text" id="pesquisar" placeholder="Pesquisar por nome do produto e pressione enter" name="pesquisaNome" size="40">
                    <span class="botao">
                        <a href="?prodCadastrar=1">Cadastrar</a>
                    </span>
                </p>
            </form>
            
            <table cellspacing="0" summary="Tabela de dados do produto">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Produto</th>
                  <th>Imagem</th>
                  <th>Preço</th>
                  <th>Ativo</th>
                  <th>Qtd Min</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                 <?php

                  if(!isset($espErro)){ // valida se há erro para assim  exibir dados.
                    foreach ($produto as $idProduto => $dadosProduto) {
                            $img = base64_encode($dadosProduto['imagem']);
                            $dadosProduto["nomeProduto"]= utf8_encode($dadosProduto["nomeProduto"]);
                            echo  "<tr>
                                  <td>${dadosProduto["idProduto"]}</td>
                                  <td>{$dadosProduto["nomeProduto"]}</td>
                                  "                         
                                  . '<td>
                                  <img src="data:image/jpeg;base64,'.$img.'" style="width: 150px;"/>
                                  </td>'.
                                 " <td>${dadosProduto["precProduto"]}</td>";
                                  if ($dadosProduto["ativoProduto"] == 1){
                                    echo "<td>Ativo</td> </td>"; 
                                  }else
                                  {
                                    echo "<td>Inativo</td></td>";
                                  }
                                 echo "<td>${dadosProduto["qtdMinEstoque"]}</td>
                                       <td> 
                                            <a href='?btnEditarProd=$idProduto'>
                                                <img src='../js/edit.png' width='16' height='16' /> 
                                            </a>
                                            <a href='?menu=products&btnExcluirProd=$idProduto'>
                                                <img src='..\js\delete.png' width='16' height='16'/>
                                            </a>
                                      </td>";                    
                        }
                   }
                        
                    ?>
                 
                   </tr>  

                <tr>

                </tr>    
              </tbody>
            </table>
            
            <div id="pager" class="pager">
              <form>
                <span>
                  Exibir <select class="pagesize">
                      <option selected="selected"  value="10">10</option>
                      <option value="20">20</option>
                      <option value="30">30</option>
                      <option  value="40">40</option>
                  </select> registros
                </span>

                <img src="..\js\first.png" class="first"/>
                <img src="..\js\prev.png" class="prev"/>
                <input type="..\js\text" class="pagedisplay"/>
                <img src="..\js\next.png" class="next"/>
                <img src="..\js\last.png" class="last"/>
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



            
           


    </body>
</html>