<?php
   include 'connection.php';
   
   session_start();
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($conexao,"select * from usuario where login = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $id = $row['id'];
   $fotoPerfil = $row['foto'];
   $login_session = $row['nome'];
   // $sobrenome = $row['sobrenome'];
   // $data_nascimento = $row['data_nascimento'];
   // $endereco = $row['endereco'];
   // $telefone = $row['telefone'];
   // $rg = $row['rg'];
   // $cpf = $row['cpf'];
   // $login = $row['login'];
   // $senha = $row['senha'];

   $usuario = serialize($row);

   $arrayUsuario = json_encode($row);      
   
   if(!isset($_SESSION['login'])){
      header("location:login.php");
   }
   
?>