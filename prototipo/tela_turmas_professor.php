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
	<h2>Minhas Turmas</h2>
	
	<form>
		<ul id="lista_turmas" nome="lista_turmas" class="content">
			<?php 
				
				$cpfProf = $_SESSION['cpfUsuario'];
				$sql = "SELECT codigoTurma FROM Turma";



				$resultado = mysqli_query($conexao, $sql);

				while ($linha = $resultado->fetch_assoc()){
					echo "<li><a href='turma_qualquer_professor.html' class='link_turma' title='Ver detalhes da turma'>".$linha['codigoTurma']."</a><span class='close' title='Remover turma'>&times;</span></li>";
				}
		
			?>
			<!--
			<li><a href="turma_qualquer_professor.html" class="link_turma" title="Ver detalhes da turma">Matemática discreta</a><span class="close" title="Remover turma">&times;</span></li>
			<li><a href="turma_qualquer_professor.html" class="link_turma" title="Ver detalhes da turma">Engenharia de Software</a><span class="close" title="Remover truma">&times;</span></li>
			<li><a href="turma_qualquer_professor.html" class="link_turma" title="Ver detalhes da turma">Estrutura de dados</a><span class="close" title="Remover turma">&times;</span></li>
			-->
		<ul id="lista_turmas">
	</form>

	<form autocomplete="off" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/tela_add_turma.php">
		<button name="btn_add_turma" id='btn_add_turma' title="Clique para adicionar uma nova turma">Adicionar turma</button>
	<form>
	
</body>
</html>