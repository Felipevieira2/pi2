<?php

session_start();

if(!ISSET($_SESSION['idUsuario'])){

	header('location: /');
}

?>