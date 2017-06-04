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
         // include "session.php";
         include 'connection.php';
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


    <!-- <script language=javascript type="text/javascript">

    function mascaraData(campoData)
    {
        var data = campoData.value;
        if(data.length == 2)
        {
            data += '/';
            document.forms[0].data.value = data;
            return true;
        }
        if(data.length == 5)
        {
            data += '/';
            document.forms[0].data.value = data;
            return true;
        }
        
    }

    function Apenas_Numeros(caracter)
    {
      var nTecla = 0;
      if (document.all) {
          nTecla = caracter.keyCode;
      } else {
          nTecla = caracter.which;
      }
      if ((nTecla> 47 && nTecla <58)
      || nTecla == 8 || nTecla == 127
      || nTecla == 0 || nTecla == 9  // 0 == Tab
      || nTecla == 13) { // 13 == Enter
          return true;
      } else {
          return false;
      }
    }
    function validaCPF(cpf) 
     {
       erro = new String;
     
        if (cpf.value.length == 11)
        {   
                cpf.value = cpf.value.replace('.', '');
                cpf.value = cpf.value.replace('.', '');
                cpf.value = cpf.value.replace('-', '');
     
                var nonNumbers = /\D/;
        
                if (nonNumbers.test(cpf.value)) 
                {
                        erro = "A verificacao de CPF suporta apenas números!"; 
                }
                else
                {
                        if (cpf.value == "00000000000" || 
                                cpf.value == "11111111111" || 
                                cpf.value == "22222222222" || 
                                cpf.value == "33333333333" || 
                                cpf.value == "44444444444" || 
                                cpf.value == "55555555555" || 
                                cpf.value == "66666666666" || 
                                cpf.value == "77777777777" || 
                                cpf.value == "88888888888" || 
                                cpf.value == "99999999999") {
                                
                                erro = "Número de CPF inválido!"
                        }
        
                        var a = [];
                        var b = new Number;
                        var c = 11;
     
                        for (i=0; i<11; i++){
                                a[i] = cpf.value.charAt(i);
                                if (i < 9) b += (a[i] * --c);
                        }
        
                        if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
                        b = 0;
                        c = 11;
        
                        for (y=0; y<10; y++) b += (a[y] * c--); 
        
                        if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
        
                        if ((cpf.value.charAt(9) != a[9]) || (cpf.value.charAt(10) != a[10])) {
                            erro = "Número de CPF inválido.";
                            
                        }
                }
        }
        else
        {
            if(cpf.value.length == 0)
                return false
            else
                erro = "Número de CPF inválido.";
        }
        if (erro.length > 0) {
                alert(erro);
                cpf.focus();
                return false;
        }   
        return true;    
     }
     
     //envento onkeyup
     function maskCPF(CPF) {
        var evt = window.event;
        kcode=evt.keyCode;
        if (kcode == 8) return;
        if (CPF.value.length == 3) { CPF.value = CPF.value + '.'; }
        if (CPF.value.length == 7) { CPF.value = CPF.value + '.'; }
        if (CPF.value.length == 11) { CPF.value = CPF.value + '-'; }
     }
     
    
</script> -->
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
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="form" class="form-horizontal" method="post" enctype="multipart/form-data" method="POST" action="salvarUsuario.php" >
                        <h1 class="page-header">Cadastrar Usuario</h1>
                        <div class="form-group">
                            <div class="col-md-3">
                                <input id="foto" name="foto" type="file" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input id="login" name="login" type="text" placeholder="Login" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="senha" name="senha" type="text" placeholder="Senha" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="data_nascimento
                                " name="data_nascimento" type="date" placeholder="Data de Nascimento dd/mm/aaaa" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="sobrenome" name="sobrenome" type="text" placeholder="sobrenome" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="telefone" name="telefone" type="text" placeholder="(xx) xxxxx - xxxx" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input id="endereco" name="endereco" type="text" placeholder="Endereco" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input id="email" name="email" type="text" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input id="cpf" name="cpf" type="text" placeholder="CPF" class="form-control"
                                size="12" maxlength="11" onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>