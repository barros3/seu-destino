<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "testedemercado";
	
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());
	// $charset = mysql_set_charset('utf8');

	if(!$conexao){
		echo "falhou conexao";
	}

?>