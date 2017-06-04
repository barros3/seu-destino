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
         include("connection.php");
    ?>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <script language=javascript type="text/javascript">
        function validaCampos() {
            if(document.getElementById("cod_mercadoria").value =="")
                {
                    alert('Preencha o campo "Codigo"!');
                    document.getElementById("cod_mercadoria").focus();
                return false;
                }
            else        
                if(document.getElementById("cod_mercadoria").value =="0")
                {
                    alert("O campo Codigo não pode ser '0'!!!");
                    document.getElementById("cod_mercadoria").focus();
                return false;
                }
            else
                if(document.getElementById("tipo_mercadoria").value=="")
                {
                    alert("Preencha o campo 'Tipo da Mercadoria'!");
                    document.getElementById("tipo_mercadoria").focus();
                return false;
                }
            else
                if(document.getElementById("nome").value=="")
                {
                alert("Preencha o campo 'Nome'!");
                document.getElementById("nome").focus();
                return false;
                }
            else
                if(document.getElementById("quantidade").value=="")
                {   
                alert("Preencha o campo 'Quantidade', ele deve ser diferente de nulo e maior que '0'!");
                document.getElementById("quantidade").focus();
                return false;
                }   
            else
                if(document.getElementById("tipo_negocio").value=="")
                {
                alert("Voce deve selecionar o Tipo do Negocio!");
                document.getElementById("tipo_negocio").focus();
                return false;
                }   
            else
                return true;
            }

            function alert(sucess) {
            var display = document.getElementById(sucess).style.display;

            if(display == "none")
                document.getElementById(sucess).style.display = 'block';
            else
                document.getElementById(sucess).style.display = 'none';
            }
    </script>

   
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
    <div id="danger" class="alert alert-danger" style="display: none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
    </div>
    <div id="sucess" class="alert alert-success" style="display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
	                <form class="form-horizontal" id="formMercadoria" name="signup" method="POST" action="salvarMercadoria.php" onsubmit="return validaCampos(); return false;">
                        <h1 class="page-header">Cadastrar Mercadoria</h1>
                        <div class="form-group">
                            <div class="col-md-3">
                                <input id="cod_mercadoria" name="cod_mercadoria" type="text" placeholder="Codigo" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="tipo_mercadoria" name="tipo_mercadoria" type="text" placeholder="Tipo da Mercadoria" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">
                                <input id="quantidade" name="quantidade" type="text" placeholder="Quantidade" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="preco
                                " name="preco" type="text" placeholder="Preco" class="form-control">
                            </div>
                            
                            <div class="col-md-3">
						      <select name="tipo_negocio" id="tipo_negocio" class="textBox form-control" data-style="btn-info">
								<?php
								$combo = "
										<option value=\"\">Escolha a Operacao</option>
										<option value=\"Comprar\">Comprar</option>
								        <option value=\"Vender\">Vender</option>";	
								echo $combo;
								?>        		
						      </select>
						    </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
	                </form>
		        </div>
		    </div>
		</div>
	</body>
</html>
