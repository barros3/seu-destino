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
      require_once 'connection.php';
    
       $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
      # LISTA MERCADORIA
      $result = "SELECT * FROM test.mercadoria" or die("Nao consegui realizar a consulta!!!");
      $listMercadoria = mysql_query($result);

      //conta o total de itens
        $total = mysql_num_rows($listMercadoria);
   
    //seta a quantidade de itens por página, neste caso, 2 itens
        $registros = 10;
   
    //calcula o número de páginas arredondando o resultado para cima
        $numPaginas = ceil($total/$registros);
   
    //variavel para calcular o início da visualização com base na página atual
        $inicio = ($registros*$pagina)-$registros;
 
    //seleciona os itens por página
        $result = "select * from test.mercadoria limit $inicio,$registros";
        $listMercadoria = mysql_query($result);
        $total = mysql_num_rows($listMercadoria);

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
        <div class="row">
            <div class="col-md-12">
              <h1 class="page-header">Lista de Mercadoria</h1>
              <table class="table table-striped table-hover">
                <thead class="">
                  <tr class="table-info" style="font-style: oblique; font-size: large;">
                    <th>Cod </th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                    <th>Preco</th>
                    <th>Tipo de Negociacao</th>
                    <!--<th>Editar</th>-->
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while ($l = mysql_fetch_array($listMercadoria)) {

                      $tipo_mercadoria = $l["tipo_mercadoria"];
                      $cod_mercadoria = $l["cod_mercadoria"];
                      $nome = $l["nome"];
                      $quantidade = $l["quantidade"];
                      $preco = $l["preco"];
                      $tipo_negocio = $l["tipo_negocio"];

                      echo 

                        "<tr>
                          <td>&nbsp;$tipo_mercadoria</td>
                          <td>&nbsp;$cod_mercadoria</td>
                          <td>&nbsp;$nome</td>
                          <td>&nbsp;$quantidade</td>
                          <td>&nbsp;R$ $preco</td>
                          <td>&nbsp;$tipo_negocio</td>
                        </tr>\n";
                    }
                    
                  ?>
                </tbody>
                <?php 
                  for($i = 1; $i < $numPaginas + 1; $i++) {
                       echo "
                            <ul class='pagination'>
                              <li><a href='pesquisaMercadoria.php?pagina=$i'>".$i."</a></li>
                            </ul>
                              ";
                    }
                 ?>

              </table>
            </div>
          </div>
        </div>
      </div>
  </body>
</html> 