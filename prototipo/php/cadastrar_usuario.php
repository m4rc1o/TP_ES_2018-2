<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'conexao.php';?>
	<?php
		
		// Verifica a conexao
		if ($conexao->connect_error) {
		    die("A conexão falhou: " . $conexao->connect_error);
		} 

		// Recuperando os valores informados pelo usuário
		$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
		$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
		$email = mysqli_real_escape_string($conexao, $_POST['email']);
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
		$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
		$data_nasc = mysqli_real_escape_string($conexao, $_POST['data_nasc']);
		$modalidade = mysqli_real_escape_string($conexao, $_POST['modalidade']);
		
		// String consulta
		$sql = "INSERT INTO Usuario(cpf, nome, email, senha, sexo, data_nasc, modalidade) VALUES ('$cpf', '$nome', '$email', '$senha', '$sexo', '$data_nasc', '$modalidade')";

		//$result = mysqli_query($conexao, $sql);
		
		// Executa a Inserção e informa o resultado
		if ($conexao->query($sql) === TRUE) {
		    echo "Novo registro inserido com sucesso!";
		} else {
		    echo "Erro: " . $sql . "<br>" . $conexao->error;
		}

		$conexao->close();
?>
</body>
</html>
