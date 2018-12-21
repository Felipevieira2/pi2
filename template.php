
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="images/Gandalflogo.jpg" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/Gandalflogo.jpg" type="image/x-icon"/>
        <title>Gandalf Store</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css\estilo.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    
    <body bgcolor="#FFFFFF">
        <div id="colorstrip1"></div>
		     <div id="colorstrip2"></div>
                <div id="feature">
                    <div id="content">                   
                            <div class="container">
                                        <div class="row vertical-offset-100">
                                            <div class="col-md-4 col-md-offset-4">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <center>
                                                           <h3 class="panel-title">Autenticação</h3> 
                                                        </center>
                                                            
                                                    </div>
                                                    <div class="panel-body">
                                                        <center>
                                                            <form method="POST" accept-charset="UTF-8" role="form">
                                                                <fieldset>
                                                                <div class="form-group">
                                                                <input class="form-control" type="text" name="login"  value="<?php echo $login?>" placeholder="username">
                                                                </div>
                                                                <div class="form-group">
                                                                <input class="form-control" type="password" name="senha"  placeholder="password">
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                <input name="remember" type="checkbox" value="Remember Me"> Lembrar senha
                                                                </label>
                                                            </div>
                                                                <input type="submit" value="Login">

                                                            </fieldset>
                                                            </form>
                                                             <?php  if (isset($msg)){
                                                                echo $msg;
                            }
                    ?>
                                                
                                            </center>
                                            <center>
                                                <img width="128px" src="images\GandalfLOGO.jpg" />
                                            </center>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               
                    </div>              
                
                </div>
            
        </div>
            <aside>
                <nav>   
                        
                        
                    
                </nav>
			</aside>
        </div>
    </body>
</html>
