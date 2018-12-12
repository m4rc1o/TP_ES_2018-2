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
		<ul id="lista_turmas" nome="lista_turmas" class="content">
			<?php 
				
				$cpfProf = $_SESSION['cpfUsuario'];
				$sql = "SELECT * FROM Aula";



				$resultado = mysqli_query($conexao, $sql);

				while ($linha = $resultado->fetch_assoc()){
					echo "<li><a href='turma_qualquer_professor.php' class='link_turma' title='Ver detalhes da turma'>".$linha['codigoTurma']."|".$linha['codDisc']."|".$linha['cpfProf']."</a><span class='close' title='Remover turma'>&times;</span></li>";
				}
		
			?>
		<ul id="lista_turmas">
	</form>
</body>
</html>
