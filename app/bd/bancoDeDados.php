<?php

$dbHost= "pi2-alexandre.database.windows.net";   #Nome do host
$dbName= "PI2";   #Nome do banco de dados
$dbUser= "alexandrefidalgo"; #Nome do usuário
$dbPassword= "M@rcinha123";   #Senha do usuário
$dsn = "Driver={SQL Server};
		Server=$dbHost;
		Port=1433;
		Database=$dbName;";

if (!$db = odbc_connect($dsn, $dbUser, $dbPassword)){
echo "Erro ao conectar no banco de dados!";
exit();
}
?>