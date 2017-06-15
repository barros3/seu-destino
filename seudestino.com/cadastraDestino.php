<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>teste-do-mercado</title>
    <?php
         include("connection.php");
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


    <body class="well well-sm">
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
                            <a href="cadastraUsuario.php">Cadastrar Usuario</a>
                        </li>
                        <li>
                            <a href="cadastraDestino.php">Cadastrar Destino</a>
                        </li>
                        <li>
                            <a href="index.php">Listar Usuario</a>
                        </li>
                        <li>
                            <a href="listarDestino.php">Listar Destino</a>
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
        <!-- <body>? -->
            <div class="container">
                    <div class="col-md-12">
                        <form id="form" class="form-horizontal" method="post" enctype="multipart/form-data" method="POST" action="salvarDestino.php" >
                            <h1 class="page-header">Cadastrar Viagem</h1>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input id="destino" name="destino" type="text" placeholder="Destino" class="form-control">
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
                                    <select name="tipoTransporte" id="tipoTransporte" class="textBox form-control" data-style="btn-info">
                                    <?php
                                        $combo = "
                                                <option value=\"\">Tipo de Transporte</option>
                                                <option value=\"AVIAO\">Avião</option>
                                                <option value=\"NAVIO\">Navio</option>
                                                <option value=\"TREM\">Trem</option>
                                                <option value=\"NAVE\">Espaço Nave</option>
                                                <option value=\"MOTO\">Moto</option>
                                                <option value=\"DEDO\">Mochilando</option>"; 
                                        echo $combo;
                                        ?> 

                                    </select>
                                </div>   
                                <div class="col-md-4 checkbox" class="form-control">
                                    <label>Tem translado?</label> <input id="translado" name="translado" type="checkbox" class="form-control">
                                    
                                </div>
                                <div class="col-md-4">
                                    <select name="hospedagem" id="hospedagem" class="textBox form-control" data-style="btn-info">
                                        <?php
                                        $combo = "
                                                <option value=\"\">Tipo de Hospedagem</option>
                                                <option value=\"1 Estrela\">1 Estrela</option>
                                                <option value=\"2 Estrelas\">2 Estrelas</option>
                                                <option value=\"3 Estrelas\">3 Estrelas</option>
                                                <option value=\"4 Estrelas\">4 Estrelas</option>
                                                <option value=\"5 Estrelas\">5 Estrelas</option>
                                                <option value=\"6 Estrelas\">6 Estrelas</option>";  
                                        echo $combo;
                                        ?> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-md-3">
                                <input id="custo" name="custo" type="text" placeholder="Custo" class="form-control"
                                size="12" maxlength="11" onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>