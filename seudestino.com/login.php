<html>
   
   <head>
      <title>seudestino.com</title>
      
       <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       <link rel="stylesheet" href="sign-up-login-form/css/style.css">
      
   </head>
   <body>
        <div class="form">
          
          <ul class="tab-group">
            <li class="tab active"><a href="#signup">Login</a></li>
            <li class="tab"><a href="#login">Cadastrar</a></li>
          </ul>
          
          <div class="tab-content">
            <div id="signup">   
              <h1>Bem vindo !</h1>
              
              <form action="fazerLogin.php" method="post">
              
                <div class="field-wrap">
                <label>
                  Login<span class="req">*</span>
                </label>
                <input type="text"required name="login" autocomplete="off" autofocus/>
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
            
            <div id="login">   
              <h1>Olá, Cadastre-se já!</h1>

              <form action="salvarUsuario.php" enctype="multipart/form-data" method="POST" >

              <div class="field-wrap">
               
                <input type="file" name="foto" required autocomplete="off"/>
              </div>
              
              <div class="top-row">
                <div class="field-wrap">
                  <label>
                    Nome<span class="req">*</span>
                  </label>
                  <input type="text" name="nome" required autocomplete="off" autofocus />
                  <script>
                    if (!("autofocus" in document.createElement("input"))) {
                      document.getElementById("q").focus();
                    }
                  </script>
                </div>
            
                <div class="field-wrap">
                  <label>
                    Sobrenome<span class="req">*</span>
                  </label>
                  <input type="text" name="sobrenome" required autocomplete="off"/>
                </div>
              </div>
              <div class="top-row">
                  <div class="field-wrap">
                    <label>
                      CPF<span class="req">*</span>
                    </label>
                    <input type="number" name="cpf" required autocomplete="off" style="" />
                  </div>

                  <div class="field-wrap">
                    <label>
                      Data de Nascimento<span class="req">*</span>
                    </label>
                    <input type="date"required autocomplete="off"/>
                  </div>
              </div>    
              
              <div class="field-wrap">
                <label>
                  Endereço<span class="req">*</span>
                </label>
                <input type="text" name="enderecos" required autocomplete="off"/>
              </div>

              <div class="top-row">
                <div class="field-wrap">
                  <label>
                    Telefone<span class="req">*</span>
                  </label>
                  <input type="text" name="telefone" required autocomplete="off" />
                </div>
            
                <div class="field-wrap">
                  <label>
                    RG<span class="req">*</span>
                  </label>
                  <input type="text" name="rg" required autocomplete="off"/>
                </div>
              </div>

               <div class="top-row">
                <div class="field-wrap">
                  <label>
                    Login<span class="req">*</span>
                  </label>
                  <input type="text" name="login" required autocomplete="off" />
                </div>
            
                <div class="field-wrap">
                  <label>
                    Senha<span class="req">*</span>
                  </label>
                  <input type="text" name="senha" required autocomplete="off"/>
                </div>

              </div>
              
              <button type="submit" class="button button-block"/>Cadastrar</button>
              
              </form>

            </div>
            
          </div><!-- tab-content -->
          
    </div> <!-- /form -->
       <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="sign-up-login-form/js/index.js"></script>
    </body>
</html>