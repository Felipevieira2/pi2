<!DOCTYPE html>
<html>
    <head>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Account
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
                    <!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>

                                    <!-- Dropdown level 2 -->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl2">
                                            <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                        </a>
                                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="#">Link</a></li>
                                                    <li><a href="#">Link</a></li>
                                                    <li><a href="#">Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

                </ul>
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
        
            <form method="post" action="exemplo.html" id="frm-filtro">
                <p>
                    <label for="pesquisar">Pesquisar</label>
                    <input type="text" id="pesquisar" name="pesquisar" size="30" />
                    <span class="botao">
                        <a href="?menu=products&prodCadastrar=1"> Cadastrar </a>
                    </span>
                </p>
            </form>
        
            <table cellspacing="0" summary="Tabela de dados do produto">
              <thead>
                <tr>
                  <th><input type="checkbox" value="1" id="marcar-todos" name="marcar-todos" /></th>
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

                        foreach ($produto as $idProduto => $dadosProduto) {
                            $img = base64_encode($dadosProduto['imagem']);
                            // <td style='width:400px;' id='teste'>${dadosProduto["descProduto"]}</td>
                            echo  "<tr>
                                  <td> <input type='checkbox' value='${dadosProduto["idProduto"]}' name='marcar[]' /></td>
                                  <td>${dadosProduto["idProduto"]}</td>
                                  <td>${dadosProduto["nomeProduto"]}</td>
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
                                       <td> <a href='#'><img src='../js/edit.png' width='16' height='16' /> </a>
                                            <a href='#'><img src='..\js\delete.png' width='16' height='16' /></a>
                                      </td>";                    
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
                </p><hr class="divider">
                Copyright © 2015 
            <p></p>
        </footer>
    </div>



            
           


    </body>
</html>
