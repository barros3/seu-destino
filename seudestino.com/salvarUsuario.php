<?php

	include 'connection.php';

	$foto = isset($_FILES["foto"]) ? $_FILES["foto"] : '';

	$nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
	$sobrenome = isset($_POST["sobrenome"]) ? $_POST["sobrenome"] : '';
	$data_nascimento = isset($_POST["data_nascimento"]) ? $_POST["data_nascimento"] : '';
	
	$endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : '';
	$telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : '';
	$rg = isset($_POST["rg"]) ? $_POST["rg"] : '';
	
	$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : '';
	$login = isset($_POST["login"]) ? $_POST["login"] : '';
	$senha = isset($_POST["senha"]) ? $_POST["senha"] : '';
	
	try{
		
		if (!empty($foto["name"])) {

			$largura = 1500;	// limite largura
			$altura = 1800;		// limite altura
			$tamanho = 100000;  // limite tamanho
			$dimensoes = getimagesize($foto["tmp_name"]); // dimensoes da img		
			$error = array();

			// valida tamanho, largura e altura
	    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){	
	     	   $error[1] = "Isso não é uma imagem.";
	   	 	} 		
			if($dimensoes[0] > $largura) {
				$error[2] = "Largura máxima permitida: ".$largura." pixels";
			}
			if($dimensoes[1] > $altura) {
				$error[3] = "Altura máxima permitida: ".$altura." pixels";
			}
			if($foto["size"] > $tamanho) {
	   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
			}

		
			if (count($error) == 0) {	// verifica erro
		
				preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext); // pega extensao

	        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1]; 				// gera nome da img
	        	$caminho_imagem = "opt/lampp/htdocs/teste-de-mercado/images/" . $nome_imagem;// define o caminho

				move_uploaded_file($foto["tmp_name"], $caminho_imagem); 			// upload da img pro caminho

				$query = "INSERT INTO `usuario` (`foto`, `nome`, `sobrenome`, `data_nascimento`, `endereco`, `telefone`, `rg`, `cpf`, `login`, `senha`) VALUES ('".$caminho_imagem."', '".$nome."', '".$sobrenome."', '".$data_nascimento."', '".$endereco."', '".$telefone."', '".$rg."', '".$cpf."', '".$login."', '".$senha."')";

				// $query inseri no banco

				$sql = mysqli_query($conexao, $query) or die("insert falhou!!!!");

				if($conexao){
					mysqli_close($conexao);
				}
				

				if (count($error) != 0) {
					foreach ($error as $erro) {
						echo $erro . "<br />";
					}
				}
			}
		}
	}catch(Exception $e){

	    echo $e->getMessage();

	}

	return header("Location:cadastraUsuario.php");

?>


