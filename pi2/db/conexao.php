<?php

$dbHost= "serverf.database.windows.net";   #Nome do host
$dbName= "db_felipe";   #Nome do banco de dados
$dbUser= "felipe"; #Nome do usuário
$dbPassword= "Fe28922480";   #Senha do usuário
$dsn = "Driver={SQL Server};
		Server=$dbHost;
		Port=1433;
		Database=$dbName;";

if (!$db = odbc_connect($dsn, $dbUser, $dbPassword)){
echo "Erro ao conectar no banco de dados!";
exit();
}
?>