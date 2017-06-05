
<!DOCTYPE html>
<html>

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="sign-up-login-form/css/style.css">
        <link rel="stylesheet" href="sign-up-login-form/scss/style.css">

        <link rel="stylesheet" href="mdl/material.css">
        <script src="mdl/material.js"></script>


        <title>seudestino.com</title>

        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

        <link rel="stylesheet" href="mdl/material.min.css">
        <script src="mdl/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
        <!-- Material Design icon font -->

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/heroic-features.css" rel="stylesheet">

        <?php
            include 'session.php';
        ?>

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

          $totalCusto = "SELECT SUM(custo) AS valor_soma $final_query";
          $resultTotal = mysqli_query($conexao, $totalCusto);
          $row = mysqli_fetch_array($resultTotal); 
          $sum = $row['valor_soma'];
          var_dump($sum);

      ?>

</head>

<body style="">

    <!-- Navigation -->
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
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        <li>
                            <a href="home.php">Sobre</a>
                        </li>
                        <!-- <li>
                            <a href="cadastraUsuario.php">Cadastrar Usuario</a>
                        </li> -->
                        <!-- <li>
                            <a href="cadastraDestino.php">Cadastrar Destino</a>
                        </li> -->
                        <!-- <li>
                            <a href="index.php">Listar Usuario</a>
                        </li> -->
                        <!-- <li>
                            <a href="listarDestino.php">Listar Destino</a>
                        </li> -->
                        <li>
                            <a href="login.php">Entrar</a>
                        </li>
                        <li>
                            <a href="logout.php">Sair</a>
                        </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <div class="col-sm-6" style="margin: 5% 0% 5% 0%;">
              <h3 style="margin: 5% 0% 0% 50%; padding: initial;">Bem vindo, <?php echo $login_session ?></h3> 
                <?php 
                    echo "<img style='width: 42%;height: 62%;' src='/".$foto."' alt='Foto do Perfil' /><br />
                    <div>
                        <p style='margin: 0% 14% 0% 50%'><strong>Sobrenome :</strong> ".$sobrenome." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>Nascimento :</strong> ".$data_nascimento." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>Endereco :</strong> ".$endereco." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>Telefone :</strong> ".$telefone." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>RG :</strong> ".$rg." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>CPF :</strong> ".$cpf." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>Login :</strong> ".$login." </p>
                        <p style='margin: 0% 14% 0% 50%'><strong>Senha Atual :</strong> ".$senha." </p>
                    </div>
                        ";
                ?>
            </div>          
            <div class="col-sm-6" style="margin: 5% 0% 5% 0%;">
                <h3 style="margin: 5% 0% 0% 0%;">Minhas opções</h3>
                <div style="margin: 5% 0% 0% 0%;">
                    <p>
                        <a id="show-modal-meus-destino" style="width: 50%;" type="button" class="button button-block btn">Meus destinos</a>
                    </p>
                    <p>
                        <a id="show-modal-destino-sonho" style="margin: 0% 0% 3% 0%; width: 50%;" type="button" class="button button-block btn">Destino dos sonhos</a>
                    </p>
                </div>
             </div>

        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Destinos sugeridos</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- -dialogs -->

        <dialog class="mdl-dialog" id="mdl-dialog-meus-destinos" style="background: rgba(19, 35, 47, 0.9);
    width: 78% !important;
    height: 58% !important;
    padding: 0% 5% 0% 5% !important;
    width: 85% !important;
    height: 85% !important;">
            <form id="form" method="post" enctype="multipart/form-data" method="POST" action="salvarUsuario.php">
              <div class="page-header">
                <h1 style="text-align: left">Meus Destinos</h1>  
                <h3 style="text-align: left">Total investido: <?php echo "R$ " . $row['valor_soma'] ?></h3>  
              </div>
              <?php
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
              <table class="table table-striped table-hover">
                <div class="row">
                    <div class="col-md-12">
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
                </form>
        </dialog>

            <dialog class="mdl-dialog" id="mdl-dialog-meu-sonho" style=" background: rgba(19, 35, 47, 0.9);width: 78% !important;    height: 58% !important;    padding: 0% 0% 0% 0% !important;    margin: -20% 0% 0% 11% !important;">
                <div class="mdl-dialog__content">
                   <div class="col-md-12">
                        <form id="form" class="form-horizontal" method="post" enctype="multipart/form-data" method="POST" action="salvarDestino.php" >
                            <h1 class="page-header signup">Destino dos meus sonhos</h1>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input id="destino" name="destino" destino="destino" type="text" placeholder="Destino" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <input id="data_entrada" name="data_entrada" type="date" placeholder="Data de Entrada" class="form-control" maxlength="10">
                                </div>
                                <div class="col-md-4">
                                    <input id="data_saida" name="data_saida" type="date" placeholder="Data de Saída" class="form-control" maxlength="10">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                <label>Translado?</label>
                                    <select name="tipoTransporte" id="tipoTransporte" class="textBox form-control" data-style="btn-info">
                                        <option value="">Tipo de Transporte</option>
                                        <option value="Aviao">Avião</option>
                                        <option value="Navio">Navio</option>
                                        <option value="Trem">Trem</option>
                                        <option value="Espaco Nave">Espaço Nave</option>
                                        <option value="Moto">Moto</option>
                                        <option value="Mochilando">Mochilando</option>"; 
                                    </select>
                                </div>   
                                <div class="col-md-4">
                                    <label>Translado?</label>
                                    <input type="checkbox" name="translado" />
                                  <!--  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                      <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                      <span class="mdl-checkbox__label">Checkbox</span>
                                    </label>

                                    <script type="text/javascript">
                                        // $("#checkbox-1").prop('checked',false).change();

                                        $("#checkbox-1").on("change", function() {
                                          if ($(this).hasClass("is-checked")) {
                                            return $(this).children().first().attr("checked", true);
                                          } else {
                                            return $(this).children().first().removeAttr("checked");
                                          }
                                        });
                                    </script> -->
                                </div>
                                <div class="col-md-4">
                                    <select name="hospedagem" id="hospedagem" class="textBox form-control" data-style="btn-info">
                                        <option value="">Tipo de Hospedagem</option>
                                        <option value="1 Estrela">1 Estrela</option>
                                        <option value="2 Estrelas">2 Estrelas</option>
                                        <option value="3 Estrelas">3 Estrelas</option>
                                        <option value="4 Estrelas">4 Estrelas</option>
                                        <option value="5 Estrelas">5 Estrelas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-md-4">
                                    <input id="custo" name="custo" type="text" class="form-control" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input id="diaria" name="diaria" type="number" placeholder="Diárias" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </dialog>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
      (function() {
        'use strict';

        var anterior = document.querySelector('#ant');
        var proximo = dialog.querySelector('#prox');

        var dialog = document.querySelector('#mdl-dialog-meus-destinos');

        // var showButton = document.querySelector('#show-modal-meus-destino');
            
        if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        var closeClickHandler = function(event) {
            dialog.close();
        };
        var showClickHandler = function(event) {
            dialog.showModal();
        };
        anterior.addEventListener('click', showClickHandler);
        proximo.addEventListener('click', showClickHandler);
        closeButton.addEventListener('click', closeClickHandler);

    }());
    </script>
    <script type="text/javascript">
      (function() {
        'use strict';
        var dialog = document.querySelector('#mdl-dialog-meus-destinos');
        var closeButton = dialog.querySelector('button');
        var showButton = document.querySelector('#show-modal-meus-destino');
        if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        var closeClickHandler = function(event) {
            dialog.close();
        };
        var showClickHandler = function(event) {
            dialog.showModal();
        };
        showButton.addEventListener('click', showClickHandler);
        closeButton.addEventListener('click', closeClickHandler);
    }());
    </script>
    <script type="text/javascript">
      (function() {
        'use strict';
        var dialog = document.querySelector('#mdl-dialog-meu-sonho');
        var closeButton = dialog.querySelector('button');
        var showButton = document.querySelector('#show-modal-destino-sonho');
        if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        var closeClickHandler = function(event) {
            dialog.close();
        };
        var showClickHandler = function(event) {
            dialog.showModal();
        };
        showButton.addEventListener('click', showClickHandler);
        closeButton.addEventListener('click', closeClickHandler);
    }());
    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="sign-up-login-form/js/index.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).change(function(){

                var _tipoTransporte = $("#tipoTransporte").val();
                var _translado = $(document).find("input[name='translado']:checked").length > 0;
                var _hospedagem = $("#hospedagem").val();
                var _diaria = $("#diaria").val();

                var tarifaTransporte;
                var tarifaHospedagem;
                var tarifaTranslado;

                var total;

                if(_tipoTransporte === ""){
                    tarifaTransporte = 0;
                }else if(_tipoTransporte === "Aviao"){
                    tarifaTransporte = 1250;
                }else if(_tipoTransporte === "Trem"){
                    tarifaTransporte = 50;
                }else if(_tipoTransporte === "Navio"){
                    tarifaTransporte = 3500;
                }else if(_tipoTransporte === "Espaco Nave"){
                    tarifaTransporte = 10;
                }else if(_tipoTransporte === "Moto"){
                    tarifaTransporte = 100;
                }else if(_tipoTransporte === "Mochilando"){
                    tarifaTransporte = 0;
                }


                if(_hospedagem === "" || _hospedagem === null){
                    tarifaHospedagem = 0;
                }else if(_hospedagem === "1 Estrela"){
                    tarifaHospedagem = 50 * _diaria;
                }else if(_hospedagem === "2 Estrelas"){
                    tarifaHospedagem = 100 * _diaria;
                }else if(_hospedagem === "3 Estrelas"){
                    tarifaHospedagem = 150 * _diaria;
                }else if(_hospedagem === "4 Estrelas"){
                    tarifaHospedagem = 200 * _diaria;
                }else if(_hospedagem === "5 Estrelas"){
                    tarifaHospedagem = 250 * _diaria;
                }

                console.log(tarifaHospedagem);

                if(_translado === true){
                    tarifaTranslado = 50;
                }else{
                    tarifaTranslado = 0;
                }

                total = tarifaTransporte + tarifaHospedagem + tarifaTranslado;
                
                $("#custo").val(total);

            });

        });
               
    </script>

</body>

</html>
