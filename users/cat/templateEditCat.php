<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../images/Gandalflogo.jpg" type="image/x-icon"/>
        <link rel="shortcut icon" href="../images/Gandalflogo.jpg" type="image/x-icon"/>
        <title>Gandalf Store</title>
        <link rel="stylesheet" type="text/css" href="..\css\estilo.css"></head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="..\js\custom.css" media="screen">
        <meta name="robots" content="noindex, nofollow"> 
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
                    <a href="../logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
       Alteração de Categoria
    </div>
    <div class="panel-body">
            
            <center>
                <h1> Alteração de Categoria</h1>
            </center>
            
        
        <div id="pager" class="pager">
            
            <form method= "POST" enctype="multipart/form-data">
                <center>
                    <p>
                      <label>Nome</label> 
                     <input class="formInput inputBorder"  type="text" value="<?php echo $dadosCategoria['nomeCategoria']?>" name="nomeCategoria">  
                    </p>     
                    <p>
                       <label> Descrição</label>
                       <input  cols="40" maxlength="100" class="formInput inputBorder"  value="<?php echo $dadosCategoria['descCategoria']?>" name="descCategoria">   
                    </p>
                        <span class="botao voltar">
                        <a href="?menu=categories">Voltar</a>
                        </span>
                        <input type="hidden" name="idCategoria" value="<?php echo $dadosCategoria['idCategoria']; ?>">  
                        <input class="botao" type="submit" value="Alterar" name="btnEditar">
                 </center>
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
