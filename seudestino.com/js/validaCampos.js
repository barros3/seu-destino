 <script type="text/javascript">
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
                    alert('O campo Codigo não pode ser '0'!!!');
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