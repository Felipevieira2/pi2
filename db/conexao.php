<?php

$dbHost= "serverf.database.windows.net";   #Nome do host
$dbName= "db_felipe";   #Nome do banco de dados
$dbUser= "felipe"; #Nome do usuário
$dbPassword= "##########";   #Senha do usuário
$dsn = "Driver={SQL Server};
		Server=$dbHost;
		Port=1433;
		Database=$dbName;";

$db = odbc_connect($dsn, $dbUser, $dbPassword);
?>
