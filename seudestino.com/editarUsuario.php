<?php
	
	include 'connection.php';
	include 'session.php';
	
	
	$id = isset($_POST["id"]) ? $_POST["id"] : '';

	$foto = isset($_FILES["foto"]) ? $_FILES["foto"] : '';

	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
	$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';

	$endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : '';
	$telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : '';
	$rg = isset($_POST["rg"]) ? $_POST["rg"] : '';
	
	$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : '';
	$login = isset($_POST["login"]) ? $_POST["login"] : '';
	$senha = isset($_POST["senha"]) ? $_POST["senha"] : '';

	try{
			
			$qwe = "SELECT * FROM `usuario` WHERE `id` = '$id'";
			$sqlSrc = mysqli_query($conexao, $qwe) or die("merreu!");

			if (empty($foto["name"])) {
				
				$r = mysqli_fetch_array($sqlSrc);
				$caminho_imagem = $r['foto'];
			}else{
				
				$largura = 4800;	// limite largura
				$altura = 4800;		// limite altura
				$tamanho = 10000000;  // limite tamanho
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
		        	$caminho_imagem = "material/images/" . $nome_imagem;// define o caminho

					move_uploaded_file($foto["tmp_name"], $caminho_imagem); 			// upload da img pro caminho
					
				}
				if (count($error) != 0) {
					foreach ($error as $erro) {
						echo $erro . "<br />";
					}
				}
			}
				$sqlEditUsuario = "UPDATE `usuario` set `foto` = '".$caminho_imagem."', `nome` = '".$nome."',
									 `sobrenome` = '".$sobrenome."', `data_nascimento` = '".$data_nascimento."',
									 `endereco` = '".$endereco."', `telefone` = '".$telefone."', `rg` = '".$rg."',
									 `cpf` = '".$cpf."', `login` = '".$login."', `senha` = '".$senha."' 
									 WHERE `id` = '".$id."'
				";
				
				$sql = mysqli_query($conexao, $sqlEditUsuario) or die("insert falhou!!!!");
				var_dump($telefone);

				if($conexao){
					mysqli_close($conexao);
				}
				
			// return header("Location:index.php");			
		

	}catch(Exception $e){

	    echo $e->getMessage();

	}

	// return header("Location:index.php");
?>