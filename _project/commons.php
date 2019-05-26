<?php
	//Variaveis
	$host = '127.0.0.1';
	$port = '5432';
	$dbname = 'LojaOnline';
	$user = 'gvargas';
	$password = 'gvargas';
	$endl = "<br />\n";

	//implentação
	$Connection = "host=".$host." port=".$port." dbname=".$dbname ." user=".$user." password=".$password;
	$DBConnection = pg_connect($Connection) or die ("Não foi possível conectar ao servidor PostGreSQL".$endl.$endl);;
	echo "Conexão efetuada com sucesso!!".$endl.$endl;
?>