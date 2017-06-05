<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>teste-do-mercado</title>

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

          ###################################################################################
          // INICIO DO CONTEÚDO

          // Realizamos a query
          $sql = mysqli_query($conexao, "SELECT $campos_query $final_query LIMIT ".$inicio.", ".$maximo."");
          
          // var_dump($listarDestino);
          // FIM DO CONTEUDO
          ###################################################################################

      ?>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

  <body class"well well-sm">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Início</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                    <li>
                        <a href="pesquisaMercadoria.php">Mercadorias</a>
                    </li>
                    <li>
                        <a href="cadastraMercadoria.php">Cadastrar</a>
                    </li>
                    <li>
                        <a href="login.php">Entrar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
          <?php
              $menos = $pagina - 1;
              $mais = $pagina + 1;

              $pgs = ceil($total / $maximo);

              if($pgs > 1 ) {

                echo "<br />";

                  // Mostragem de pagina
                  if($menos > 0) {
                  echo "<a id='ant' href=".$_SERVER['PHP_SELF']."?pagina=$menos>anterior</a>&nbsp; ";
                  }

                  // Listando as paginas
                for($i=1;$i <= $pgs;$i++) {
                  if($i != $pagina) {
                    echo " <a id='prox' href=".$_SERVER['PHP_SELF']."?pagina=".($i).">$i</a> | ";
                  } else {
                    echo " <strong>".$i."</strong> | ";
                  }
                }

                if($mais <= $pgs) {
                  echo " <a href=".$_SERVER['PHP_SELF']."?pagina=$mais>próxima</a>";
                }
              }
            ?>
        <div class="row">
            <div class="col-md-12">
              <h1 class="page-header">Lista de Mercadoria</h1>
              <table class="table table-striped table-hover">
                <thead class="">
                  <tr class="table-info" style="font-style: oblique; font-size: large;">
                    <th>Id</th>
                     <th>Destino</th>
                    <th>Data de Entrada</th>
                    <th>Data de Saída</th>
                    <th>Diárias</th>
                    <th>Tipo de Transporte</th>
                    <th>Hospedagem</th>
                    <th>Translado</th>
                    <th>Custo</th>
                    <!--<th>Editar</th>-->
                  </tr>
                </thead>
                <tbody>
                 <?php
                  include 'connection.php';
                  include 'paginacao.php';

                    while ($l = mysqli_fetch_array($sql)) {

                      $id = $l["id"];
                      $destino = $l["destino"];
                      $data_entrada = $l["data_entrada"];
                      $data_saida = $l["data_saida"];
                      $diarias = $l["diarias"];
                      $tipoTransporte = $l["tipoTransporte"];
                      $translado = $l["translado"];
                      $hospedagem = $l["hospedagem"];
                      $custo = $l["custo"];

                      echo 
                        "<tr>
                          <td>&nbsp;$id</td>
                          <td>&nbsp;$destino</td>
                          <td>$data_entrada</td>
                          <td>&nbsp;$data_saida</td>
                          <td>&nbsp;$diarias</td>
                          <td>&nbsp;$tipoTransporte</td>
                          <td>&nbsp;$hospedagem</td>
                          <td>&nbsp;$translado</td>
                          <td>&nbsp;$custo</td>
                        </tr>\n";
                    }
                    
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </body>
</html> 