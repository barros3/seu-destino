<?php
   include 'connection.php';

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {   // verifica se o metodo foi acionado
      
      $nome = mysqli_real_escape_string($conexao, $_POST['login']);     // pega login
      $senha = mysqli_real_escape_string($conexao, $_POST['senha']);    //pega senha
      
      $sql = "SELECT id FROM usuario WHERE login = '$nome' and senha = '$senha'";  // consulta no banco
      
      $result = mysqli_query($conexao, $sql);   //  passa conecao do connection.php
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
      
      $active = $row['nome'];
      
      $count = mysqli_num_rows($result);
      
        
      if($count == 1) {
         $_SESSION['login'] = $nome;
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>seudestino.com</title>
      
       <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       <link rel="stylesheet" href="sign-up-login-form/css/style.css">
      
   </head>
   <body style="background-image: url('images/viagem.jpg');   -webkit-background-size: 100% 100%;
  -moz-background-size: 100% 100%;
  -o-background-size: 100% 100%;
  background-size: 100% 100%;"">
        <div class="form">
          
          <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sua área</a></li>
            <li class="tab"><a href="#login">Cadastrar</a></li>
          </ul>
          
          <div class="tab-content">
            <div id="signup">   
              <h1>Cadastra-se</h1>
              
              <form action="/" method="post">
              
              <div class="top-row">
                <div class="field-wrap">
                  <label>
                    First Name<span class="req">*</span>
                  </label>
                  <input type="text" required autocomplete="off" />
                </div>
            
                <div class="field-wrap">
                  <label>
                    Last Name<span class="req">*</span>
                  </label>
                  <input type="text"required autocomplete="off"/>
                </div>
              </div>

              <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="email"required autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label>
                  Set A Password<span class="req">*</span>
                </label>
                <input type="password"required autocomplete="off"/>
              </div>
              
              <button type="submit" class="button button-block"/>Cadastrar</button>
              
              </form>

            </div>
            
            <div id="login">   
              <h1>Bem vindo!</h1>
              
              <form action="/" method="post">
              
                <div class="field-wrap">
                <label>
                  Login<span class="req">*</span>
                </label>
                <input type="email"required name="login" autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label>
                  Senha<span class="req">*</span>
                </label>
                <input type="password"required name="senha" autocomplete="off"/>
              </div>
              
              <p class="forgot"><a href="#">Esqueceu a senha?</a></p>
              
              <button class="button button-block"/>Entre</button>
              
              </form>

            </div>
            
          </div><!-- tab-content -->
          
    </div> <!-- /form -->
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="sign-up-login-form/js/index.js"></script>
    </body>
</html>