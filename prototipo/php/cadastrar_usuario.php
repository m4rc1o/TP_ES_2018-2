<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		
		header('Content-Type: text/html; charset=utf-8');

		$nomeServidor = "localhost";
		$nomeUsuario = "root";
		$senha = "1111011";
		$nomeBD = "avadesk";


		// Cria a conexao
		$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBD);
		

		
		// Verifica a conexao
		if ($conexao->connect_error) {
		    die("A conexão falhou: " . $conexao->connect_error);
		} 

		// Recuperando os valores informados pelo usuário
		$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
		$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
		$email = mysqli_real_escape_string($conexao, $_POST['email']);
		$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
		$data_nasc = mysqli_real_escape_string($conexao, $_POST['data_nasc']);
		$modalidade = mysqli_real_escape_string($conexao, $_POST['modalidade']);
		
		// String consulta
		$sql = "INSERT INTO Usuario(cpf, nome, email, sexo, data_nasc, modalidade) VALUES ('$cpf', '$nome', '$email', '$sexo', '$data_nasc', '$modalidade')";

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