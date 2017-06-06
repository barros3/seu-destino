<?php
include 'connection.php';
	$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
	# LISTA MERCADORIA
	$result = "SELECT * FROM destino" or die("Nao consegui realizar a consulta!!!");
	$listDestinos = mysqli_query($conexao, $result);
	//conta o total de itens
	$total = mysqli_num_rows($listDestinos);
	//seta a quantidade de itens por página, neste caso, 2 itens
	$registros = 4;
	//calcula o número de páginas arredondando o resultado para cima
	$numPaginas = ceil($total/$registros);
	//variavel para calcular o início da visualização com base na página atual
	$inicio = ($registros*$pagina)-$registros;
	//seleciona os itens por página
	$result = "select * from destino limit $inicio, $registros";
	$listDestinos = mysqli_query($conexao, $result);
	$total = mysqli_num_rows($listDestinos);
	$listarDestino = mysqli_query($conexao, "SELECT * FROM destino");
	$qtdeLinhas = mysqli_num_rows($listarDestino);
	// $detinoTabela = mysqli_fetch_array($listarDestino, MYSQLI_ASSOC);
?>