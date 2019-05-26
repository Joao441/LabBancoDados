<?php
	//Uses 
	include_once 'Commons.php';

	//Variaeis

	//funçãos

	//implentação
	echo "Plataformas".$endl;

	$result = pg_query($DBConnection, "select * from Plataforma");

	while($plataforma = pg_fetch_array($result)){
		echo $plataforma['codigo']." - ".$plataforma['nome'].$endl;	
	}
?>