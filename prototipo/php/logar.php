<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'conexao.php';?>
	<!-- A variável que contém a conexão chama-se $conexao -->
	
	<?php
		session_start();
		
		// Recuperando os valores informados pelo usuário
		$emailInformado = mysqli_real_escape_string($conexao, $_POST['email']);
		$senhaInformada = mysqli_real_escape_string($conexao, $_POST['senha']);
		
		// String consulta
		$sql = "SELECT cpf, email, senha, modalidade FROM Usuario WHERE email="."'$emailInformado'";
		
		$resultadoConsulta = mysqli_query($conexao, $sql);
		
		// Verifica se o usuário já está cadastrado e se a senha está correta
		if($resultadoConsulta->num_rows == 1){
			$linha = mysqli_fetch_assoc($resultadoConsulta);
			
			//echo "Senha informada: ".$senhaInformada."\n";
			//echo "Senha cadastrada: ".$linha['senha']."\n";
			
			if($linha['senha'] == md5($senhaInformada)){
				
				if($linha['modalidade'] == 'A'){
					//Carrega a tela inicial do aluno
					header('Location: ../tela_turmas_aluno.html');
				}else if($linha['modalidade'] == 'P'){
					//Carrega a tela inicial do professor
					header('Location: ../tela_turmas_professor.html');
				}
				
				$_SESSION['loggedin'] = true;
				$_SESSION['cpfUsuario'] = $linha['cpf'];
				
			}else{
				echo "Senha inválida!";
			}
		}else{
			echo "O usuário informado não está cadastrado no sitema!";
		}
	?>

</body>
</html>
