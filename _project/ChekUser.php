<?php
	include_once 'Commons.php';
	
	$user = $_POST['user'];
	$senha = $_POST['psw'];
	
	$result = pg_query($DBConnection, "select ValidaUsuario('".$user."', '".$senha."') as ACESSO;");
	$acesso = pg_fetch_array($result);
	
	if($acesso['acesso'] == 1){
		header("Location: home.php");
	}else{
		header("Location: login.php");
	}
?>