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

	<h1>AVAdesk - Cadastro de turma</h1>
	<form autocomplete="on" accept="image/jpg, image/png" action="#" method="post">
		
		<h2>Por favor, preencha os campos abaixo:</h2>
		
		Codigo turma:<br>
		<input type="text" name="cod_turma" title="Digite o código da turma" placeholder="Ex.: ES-2018-2" required><br><br>

		Vagas disponiveis:<br>
		<input type="number" name="vagas" placeholder="A quantidade de vagas ofertadas" maxlength="3" required><br><br>
		
		Selecione uma disciplina:<br>
		<select name="owner">
			<?php 
				$sql = mysqli_query($conexao, "SELECT codDisc FROM Disciplina");
				while ($linha = $sql->fetch_assoc()){
					echo "<option value=".$linha['codDisc'].">".$linha['codDisc']."</option>";
				}
			?>
		</select>

		<br><br><br>
		<button type="submit" name="cad_usuario">Cadastar</button>
		<button type="reset">Limpar</button>
	</form>

</body>
</html>
