<?php

	include 'connection.php';

	$destino = isset($_POST["destino"]) ? $_POST["destino"] : '';
	$data_entrada = isset($_POST["data_entrada"]) ? $_POST["data_entrada"] : '';
	$data_saida = isset($_POST["data_saida"]) ? $_POST["data_saida"] : '';
	
	$tipoTransporte = isset($_POST["tipoTransporte"]) ? $_POST["tipoTransporte"] : '';
	$translado = isset($_POST["translado"]) ? $_POST["translado"] : '';
	$hospedagem = isset($_POST["hospedagem"]) ? $_POST["hospedagem"] : '';
	
	$custo = isset($_POST["custo"]) ? $_POST["custo"] : '';
	
	try{
		
		$query = "INSERT INTO `destino` (`destino`, `data_entrada`, `data_saida`, `tipoTransporte`, `translado`, `hospedagem`, `custo`) VALUES ('".$destino."', '".$data_entrada."', '".$data_saida."', '".$tipoTransporte."', '".$translado."', '".$hospedagem."', '".$custo."')";

		$sql = mysqli_query($conexao, $query) or die("insert falhou!!!!");

		if($conexao){
			mysqli_close($conexao);
		}

		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}	

	}catch(Exception $e){

	    echo $e->getMessage();

	}

	return header("Location:index.php");

?>