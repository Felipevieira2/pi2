
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
                                    <form method="POST">
                                      <p>
                                        <?php if (isset($msg)){
                                        echo $msg;
                                        }
                                        else{
                                        echo "<h4>Bem-vindo!</h4>";  
                                        }
                                        ?>
                                        
                                        
                                        <input type="text" name="login"  value="<?php echo $login?>" placeholder="username" />
                                      
                                        <input type="password" name="senha"  placeholder="password" />
                                        
                                    
                                      
                                      <center>
                                          <div id="logoFormHippo"> 
                                            <center>
                                               <img width ="100px" src="images\logoForm.png"/> 
                                         </div>
                                      </center>
                                      <p>&nbsp;</p>
                                      <input id= "btnLogin" type="submit" value="Login" name="btnLogin"/>
                                    </form>
                                   
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
