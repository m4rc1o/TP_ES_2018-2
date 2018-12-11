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

	<h1>AVAdesk - Adicionar disciplina</h1>
	<form autocomplete="on" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/php/add_disciplina.php" method="post">
		
		<h2>Por favor, preencha os campos abaixo:</h2>
		
		Codigo da disciplina:<br>
		<input type="text" name="codDisc" title="Digite o codigo da disciplina" placeholder="Digite o codigo da disciplina" maxlength="8" required><br><br>
        Nome da disciplina:
		<input type="text" name="nomeDisc" title="Digite o nome da disciplina" placeholder="Digite o nome da disciplina" maxlength="60" required><br><br>
		<br><br><br>
		<button type="submit" name="cad_disc">Cadastar</button>
		<button type="reset">Limpar</button>
	</form>

</body>
</html>
