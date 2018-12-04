<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'conexao.php';?>
	<!-- A variável que contém a conexão chama-se $conexao -->
	
	<?php

		// Recuperando os valores informados pelo usuário
		$emailInformado = mysqli_real_escape_string($conexao, $_POST['email']);
		$senhaInformada = mysqli_real_escape_string($conexao, $_POST['senha']);
		
		// String consulta
		$sql = "SELECT email, senha FROM Usuario";
		
		$resultadoConsulta = mysqli_query($conexao, $sql);
		
		echo  $resultadoConsulta->num_rows;
		
		/*
		// Verifica se o usuário já está cadastrado
		if($resultadoConsulta->num_rows > 0){
			$linha = $;
			if(linha['senha'] == $senhaInformada){
				echo "Esta bitch lasagna encontra-se cadastrada no sitema!";
			}else{
				echo "Senha inválida!";
			}
		}else{
			echo "Esta bitch lasagna não encontra-se cadastrada no sitema!";
		}
		*/
	?>

</body>
</html>
