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
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
