<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário HTML - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/format_tl_cadastrar.css">
	<script type="text/javascript" src="js/funcoes1.js"></script>
</head>

<body>
	<?php include 'php/conexao.php';?>

	<h1>AVAdesk - Excluir turma</h1>
	<form autocomplete="on" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/php/excluir_turma.php" method="post">
		
		<h2>Por favor, preencha os campos abaixo:</h2>
		
		Codigo turma:<br>
		<select type="text" name="cod_turma" title="Digite o código da turma" placeholder="Ex.: ES-2018-2" required>
        <?php 
				$sql = mysqli_query($conexao, "SELECT codigoTurma FROM Aula");
				while ($linha = $sql->fetch_assoc()){
					echo "<option value=".$linha['codigoTurma'].">".$linha['codigoTurma']."</option>";
				}
			?>
        </select><br><br>

        Professor (CPF):<br>
		<select type="text" name="cpf_prof" title="Digite o código da turma" placeholder="Ex.: ES-2018-2" required>
        <?php 
				$sql = mysqli_query($conexao, "SELECT cpfProf FROM Aula");
				while ($linha = $sql->fetch_assoc()){
					echo "<option value=".$linha['cpfProf'].">".$linha['cpfProf']."</option>";
				}
			?>
        </select><br><br>
		
		Selecione uma disciplina:<br>
		<select name="codDisc">
			<?php 
				$sql = mysqli_query($conexao, "SELECT codDisc FROM Aula");
				while ($linha = $sql->fetch_assoc()){
					echo "<option value=".$linha['codDisc'].">".$linha['codDisc']."</option>";
				}
			?>
		</select><br><br>

		<br><br><br>
		<button type="submit" name="excluir_turma">Excluir</button>
		<button type="reset">Limpar</button>
	</form>

</body>
</html>
