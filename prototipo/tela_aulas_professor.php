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
	<h2>Turma|Disciplina|Professor</h2>
	
	<form>
		<ul id="lista_aulas" nome="lista_aulas" class="content">
			<?php 
				
				$cpfProf = $_SESSION['cpfUsuario'];
				$sql = "SELECT * FROM Aula";



				$resultado = mysqli_query($conexao, $sql);

				while ($linha = $resultado->fetch_assoc()){
					echo "<li><a class='link_turma' title='Ver detalhes da aula'>".$linha['codigoTurma']."|".$linha['codDisc']."|".$linha['cpfProf']."</a><span class='close' title='Remover aula'>&times;</span></li>";
				}
		
			?>
		<ul id="lista_aulas">
	</form>

	<form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_add_aula.php">
		<button name="btn_add_aula" id='btn_add_aula' title="Clique para adicionar uma nova aula">Adicionar</button>
	</form>
    <form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_alterar_aula.php">
		<button name="btn_add_aula" id='btn_excluir_aula' title="Clique para alterar uma aula">Alterar</button>
	</form>
    <form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_excluir_aula.php">
		<button name="btn_add_aula" id='btn_excluir_aula' title="Clique para excluir uma aula">Excluir</button>
	</form>
</body>
</html>
