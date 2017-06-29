<?php
      include 'connection.php';
      // Informações da query
      $campos_query = "*";
      $final_query  = "FROM destino";

      // Maximo de registros por pagina
      $maximo = 6;

      // Declaração da pagina inicial
      $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] :1;
      // if($pagina == "") {
      //     $pagina = "1";
      // }

      // Calculando o registro inicial
      $inicio = $pagina - 1;
      $inicio = $maximo * $inicio;

      // Conta os resultados no total da query
      $strCount = "SELECT COUNT(*) AS 'num_resgistro' $final_query";
      $query = mysqli_query($conexao, $strCount);
      $row = mysqli_fetch_array($query);
      $total = $row["num_resgistro"];

      // Realizamos a query
      $sql = mysqli_query($conexao, "SELECT $campos_query $final_query LIMIT ".$inicio.", ".$maximo."");

      $totalCusto = "SELECT SUM(custo) AS valor_soma $final_query";
      $resultTotal = mysqli_query($conexao, $totalCusto);
      $row = mysqli_fetch_array($resultTotal); 
      $sum = $row['valor_soma'];
      // var_dump($sum);

    ?>