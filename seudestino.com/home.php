<html>
   <?php
         include "session.php";
         include 'connection.php';
    ?>
   <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    
	    <title>seudestino.com</title>
	    

	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="css/thumbnail-gallery.css" rel="stylesheet">
   </head>
   
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
                <a class="navbar-brand" href="home.php">Início</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="home.php">Sobre</a>
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
                            <a href="logout.php">Sair</a>
                        </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <body>
    <h1>Bem vindo <?php echo $login_session ?></h1> 
    <?php 
    	echo "<img src='images/".$foto."' alt='Foto de Exibição' /><br />";
    ?>
      <!-- <h2><a href = "logout.php">Sign Out</a></h2> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="form" class="form-horizontal" method="post" enctype="multipart/form-data" method="POST" action="salvarUsuario.php" >
                        <div class="row">
				            <div class="col-md-12">
							<h1 class="page-header">Destinos disponiveis</h1>	
				              <table class="table table-striped table-hover">
				                <thead class="">
				                  <tr class="table-info" style="font-style: oblique; font-size: large;">
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

				                  	$listarDestino = mysqli_query($conexao, "SELECT * FROM destino");
				                  	$qtdeLinhas = mysqli_num_rows($listarDestino);
				                  	// $detinoTabela = mysqli_fetch_array($listarDestino, MYSQLI_ASSOC);

				                    while ($l = mysqli_fetch_array($listarDestino)) {
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
				                <!--  <?php 
				                 	 for($i = 1; $i < $qtdeLinhas + 1; $i++) {
				                       echo "
				                            <ul class='pagination'>
				                             <li><a href='home.php?pagina=$i'>".$i."</a></li>
					                       </ul>
					                              ";
				                     }	
			               		  ?> -->


				              </table>
				            </div>
				          </div>
				        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
   
</html>


