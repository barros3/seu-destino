<?php
   include 'connection.php';
   
   session_start();
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($conexao,"select * from usuario where login = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $login_session = $row['nome'];
   $foto = $row['foto'];

   
   if(!isset($_SESSION['login'])){
      header("location:login.php");
   }
   
?>