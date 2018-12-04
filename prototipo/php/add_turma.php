<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'conexao.php';?>
	<!-- A variável que contém a conexão chama-se $conexao -->
	
	<?php

		// Recuperando os valores informados pelo professor
		$codTurma = mysqli_real_escape_string($conexao, $_POST['cod_turma']);
		$qtdVagas = mysqli_real_escape_string($conexao, $_POST['vagas']);
		
		// String consulta
		$sql = "INSERT INTO TABLE Turma VALUES(codigoTurma="."'$codTurma', vagas="."'$vagas')";	
		$sql = "INSERT INTO Turma(codigoTurma, vagas) VALUES ('$codTurma', '$vagas')";	
		
		$resultadoConsulta = mysqli_query($conexao, $sql);
		
		// Executa a Inserção e informa o resultado
		if ($conexao->query($sql) === TRUE) {
		    echo "Novo turma inserida com sucesso!";
		} else {
		    echo "Erro: " . $sql . "<br>" . $conexao->error;
		}

		$conexao->close();
	?>

</body>
</html>
