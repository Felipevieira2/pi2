
<!DOCTYPE html>
<html>
    <head>
        <title>Hippo Mercado</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css\estilo.css">

    </head>
    
    <body bgcolor="#FFFFFF">
        <div id="colorstrip1"></div>
		     <div id="colorstrip2"></div>
                <div id="feature">
                    <div id="content">
                                <div id="formLogin"> 
                                    <form  method="POST">
                                     <?php 
                                            if (isset($msg)){
                                                echo $msg;
                                            }
                                        ?>
                                    <h4>Bem-vindo novamente.</h4>
                                       
                                    <input type="text" name="login"  value="<?php echo$login?>" placeholder="username" />
                                    </br>
                                    <input type="password" name="senha"  placeholder="password" />
                                    </br>
                                    <input type="submit" value="Login" name="btnLogin">
                                    <input type="button" value="Registrar" name="btnRegistrar">
                                    
                                </div>
                               
                    </div>              
                
                   
                </div>
            </div>
        </div>
            <aside>
                <nav>   
                    <center>
                        <img id="logoHippo" src="images\LogoHippo.jpg" />

                    </center>
                        
                    
                </nav>
			</aside>
        </div>
    </body>
</html>
