<html>
<head>
<title>Cadastro de Usuario</title>
</head>
<body>

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
	$DBConnection = pg_connect($Connection) or die ("Não foi possível conectar ao servidor PostGreSQL".$endl.$endl);
?>php
$Nome=$_POST['Nome'];
$Sobrenome=$_POST['Sobrenome'];
$CNPJ/CPF=$_POST['CNPJ/CPF'];
$Endereco=$_POST['Endereco'];
$Numero=$_POST['Numero'];
$Bairro=$_POST['Bairro'];
$CEP=$_POST['CEP'];
$Usuario=$_POST['Usuario'];
$Apelido=$_POST['Apelido'];
</body
