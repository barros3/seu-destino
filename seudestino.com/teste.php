<?php
include 'connection.php';
// Informações da query
$campos_query = "*";
$final_query  = "FROM produtos ORDER BY cod ASC";

// Maximo de registros por pagina
$maximo = 2;

// Declaração da pagina inicial
$pagina = $_GET["pagina"];
if($pagina == "") {
    $pagina = "1";
}

// Calculando o registro inicial
$inicio = $pagina - 1;
$inicio = $maximo * $inicio;

// Conta os resultados no total da query
$strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
$query = mysqli_query($conexao, $strCount);
$row = mysqli_fetch_array($query);
$total = $row["num_registros"];

###################################################################################
// INICIO DO CONTEÚDO

// Realizamos a query
$sql = mysqli_query($conexao, "SELECT $campos_query $final_query LIMIT $inicio,$maximo");

// Exibimos os nomes dos produtos e seus repectivos valores
while ($linha = mysqli_fetch_object($sql)) {
  echo "<b>" . $linha->nome . "</b> (R$ ". $linha->valor.")<br />";
}

// FIM DO CONTEUDO
###################################################################################

$menos = $pagina - 1;
$mais = $pagina + 1;

$pgs = ceil($total / $maximo);

if($pgs > 1 ) {

  echo "<br />";

    // Mostragem de pagina
    if($menos > 0) {
    echo "<a href=".$_SERVER['PHP_SELF']."?pagina=$menos>anterior</a>&nbsp; ";
    }

    // Listando as paginas
  for($i=1;$i <= $pgs;$i++) {
    if($i != $pagina) {
      echo " <a href=".$_SERVER['PHP_SELF']."?pagina=".($i).">$i</a> | ";
    } else {
      echo " <strong>".$i."</strong> | ";
    }
  }

  if($mais <= $pgs) {
    echo " <a href=".$_SERVER['PHP_SELF']."?pagina=$mais>próxima</a>";
  }
}
?>