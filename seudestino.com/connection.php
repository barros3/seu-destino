<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "testedemercado";
	
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());

	if(!$conexao){
		echo "falhou conexao";
	}

?>