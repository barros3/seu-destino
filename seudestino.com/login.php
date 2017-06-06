<html>
   
   <head>
      <title>seudestino.com</title>
      
       <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       <link rel="stylesheet" href="sign-up-login-form/css/style.css">
       <link rel="stylesheet" href="sweetalert2.min.css">
       <link rel="stylesheet" href="stylesweetalert2.css">

       <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
       <!-- <link rel="stylesheet" href="bower_components/sweetalert2/dist/sweetalert2.min.css"> -->

       <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      
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
              <div class="top-row">
                <div class="field-wrap">
                 <label>
                    Foto: 480 x 480<span class="req">*</span>
                  </label>
                </div>  
                <div class="field-wrap">
                  <input type="file" name="foto" required autocomplete="off"/>
                </div>
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
                    <input type="number" name="cpf" required autocomplete="off"  size="12" maxlength="11" onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      <span class="req">*</span>
                    </label>
                    <input type="date" name="data_nascimento" required autocomplete="off" onchange="mascaraData(this);" />
                  </div>
              </div>    
              
              <div class="field-wrap">
                <label>
                  Endereço<span class="req">*</span>
                </label>
                <input type="text" name="endereco" required autocomplete="off"/>
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
              
              <button type="submit" class="button button-block" data-loading-text="Salvando..."/>Salvar</button>
              
              </form>

            </div>
            
          </div><!-- tab-content -->
          
    </div> <!-- /form -->
       <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="sign-up-login-form/js/index.js"></script>
        <script type="text/javascript">
        // Quando enviado o formulário
          $('#formulario').on('submit', function () {
         
            // Armazenando objetos em variáveis para utilizá-los posteriormente
            var formulario = $(this);
            var botao = $('#salvar');
            var mensagem = $('#mensagem');
         
            // Exibindo indicador de carregamento (Bootstrap)
            // Docs: http://getbootstrap.com/javascript/#buttons
            botao.button('loading');
         
            // Enviando formulário
            $(this).ajaxSubmit({
         
                // Definindo tipo de retorno do servidor
                dataType: 'json',
         
                // Se a requisição foi um sucesso
                success: function (retorno) {
         
                    // Se cadastrado com sucesso
                    if (retorno.sucesso) {
                        // Definindo estilo da mensagem (sucesso)
                        mensagem.attr('class', 'alert alert-success');
         
                        // Limpando formulário
                        formulario.resetForm();
                    }
                    else {
                        // Definindo estilo da mensagem (erro)
                        mensagem.attr('class', 'alert alert-danger');
                    }
         
                    // Exibindo mensagem
                    mensagem.html(retorno.mensagem);
         
                    // Escondendo indicador de carregamento
                    botao.button('reset');
         
                },
         
                // Se houver algum erro na requisição
                error: function () {
         
                    // Definindo estilo da mensagem (erro)
                    mensagem.attr('class', 'alert alert-danger');
         
                    // Exibindo mensagem
                    mensagem.html(retorno.mensagem);
         
                    // Escondendo indicador de carregamento
                    botao.button('reset');
                }
         
            });
         
            // Retorna FALSE para que o formulário não seja enviado de forma convencional
            return false;
         
        });
        
    </script>
    <script language=javascript type="text/javascript">

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

                              alert("Número de CPF inválido!");
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
                            // erro = "Número de CPF inválido.";
                            alert("Número de CPF inválido!");
                            
                        }
                }
        }
        else
        {
            if(cpf.value.length == 0)
                return false
            else
                // erro = "Número de CPF inválido.";
            alert("Número de CPF inválido!");
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
     
    
</script>
    </body>
</html>