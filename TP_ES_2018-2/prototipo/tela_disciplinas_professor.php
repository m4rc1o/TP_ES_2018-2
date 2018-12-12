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
	<h2>Disciplinas</h2>
	
	<form>
		<ul id="lista_disciplinas" nome="lista_disciplinas" class="content">
			<?php 
				
				$cpfProf = $_SESSION['cpfUsuario'];
				$sql = "SELECT * FROM Disciplina";



				$resultado = mysqli_query($conexao, $sql);

				while ($linha = $resultado->fetch_assoc()){
					echo "<li><a href='disciplina_qualquer_professor.php' class='link_turma' title='Ver detalhes da disciplina'>".$linha['codDisc']." ".$linha['nomeDisc']."</a><span class='close' title='Remover disciplina'>&times;</span></li>";
				}
			?>
		<ul id="lista_disciplinas">
	</form>

	<form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_add_disciplina.php">
		<button name="btn_add_disciplina" id='btn_add_disciplina' title="Clique para adicionar uma nova disciplina">Adicionar</button>
	</form>
    <form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_alterar_disciplina.php">
		<button name="btn_add_disciplina" id='btn_excluir_disciplina' title="Clique para alterar uma disciplina">Alterar</button>
	</form>
    <form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_excluir_disciplina.php">
		<button name="btn_add_disciplina" id='btn_excluir_disciplina' title="Clique para excluir uma disciplina">Excluir</button>
	</form>
</body>
</html>
