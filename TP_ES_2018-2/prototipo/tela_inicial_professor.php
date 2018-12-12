<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário HTML - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/format_tl_cadastrar.css">
	<script type="text/javascript" src="js/funcoes1.js"></script>
</head>

<body>
	<?php 
		include 'php/conexao.php';
		session_start();
	?>

	<h1><?php echo $_SESSION['nomeUsuario']; ?></h1>
	<form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_aulas_professor.php">
		<button name="btn_add_turma" id='btn_add_turma' title="Clique para adicionar uma nova aula">Aulas</button>
    </form>

    <form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_disciplinas_professor.php">
		<button name="btn_add_turma" id='btn_excluir_turma' title="Clique para excluir uma turma">Disciplinas</button>
	</form>
	
</body>
</html>
