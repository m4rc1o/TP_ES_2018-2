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
		$codTurma = mysqli_real_escape_string($conexao, $_POST['cod_turma']);
        $cpfProfessor = mysqli_real_escape_string($conexao, $_POST['cpf_prof']);		
        $codDisc = mysqli_real_escape_string($conexao, $_POST['codDisc']);		

		// String consulta
		$sql = "INSERT INTO Aula(cpfProf, codigoTurma, codDisc) VALUES('$cpfProfessor', '$codTurma','$codDisc')";	
		
		// Executa a Inserção e informa o resultado
		if ($conexao->query($sql) === TRUE) {
		    echo "Nova turma inserida com sucesso!";
		} else {
		    echo "Erro: " . $sql . "<br>" . $conexao->error;
		}
		
		$conexao->close();
	?>

</body>
</html>
