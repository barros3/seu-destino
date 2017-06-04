<?php
	$cod_mercadoria = isset($_POST["cod_mercadoria"]) ? $_POST["cod_mercadoria"] : '';
	$tipo_mercadoria = isset($_POST["tipo_mercadoria"]) ? $_POST["tipo_mercadoria"] : '';
	$nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
	$quantidade = isset($_POST["quantidade"]) ? $_POST["quantidade"] : '';
	$preco = isset($_POST["preco"]) ? $_POST["preco"] : '';
	$tipo_negocio = isset($_POST["tipo_negocio"]) ? $_POST["tipo_negocio"] : '';
	
	$insert = "INSERT INTO test.mercadoria (cod_mercadoria, tipo_mercadoria, nome, quantidade, preco, tipo_negocio) VALUES ('$cod_mercadoria', '$tipo_mercadoria', '$nome', '$quantidade', '$preco', '$tipo_negocio')" or die("inser falhou!!!!");

	$sql = mysql_query("$insert");

	 return header("Location:cadastraMercadoria.php");
?>