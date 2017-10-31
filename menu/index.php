<?php 
include('../db/conexao.php');
include('../auth/controle.php');

if (!isset($_GET['menu'])){
include('template.php');
}
if (isset($_GET['menu'])){
  if($_GET['menu']=='users' || !isset($_GET['menu'])){

  	    header ('Location: ../users/index.php');  
  }
}

    
if (isset($_GET['menu'])== 'categories'){

}
?>