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
		// Recuperando os valores informados pelo professor		
        $codDisc = mysqli_real_escape_string($conexao, $_POST['codDisc']);
        $nomeDisc = mysqli_real_escape_string($conexao, $_POST['nomeDisc']);

		// String consulta
		$sql = "INSERT INTO Disciplina(codDisc, nomeDisc) VALUES('$codDisc', '$nomeDisc')";	
		
		// Executa a Inserção e informa o resultado
		if ($conexao->query($sql) === TRUE) {
		    echo "Disciplina inserida com sucesso!";
		} else {
		    echo "Erro: " . $sql . "<br>" . $conexao->error;
		}
		
		$conexao->close();
	?>

</body>
</html>
