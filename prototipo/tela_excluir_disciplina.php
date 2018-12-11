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

	<h1>AVAdesk - Excluir disciplina</h1>
	<form autocomplete="on" accept="image/jpg, image/png" action="http://localhost/TP_ES_2018-2/prototipo/php/excluir_disciplina.php" method="post">
		
		<h2>Por favor, preencha os campos abaixo:</h2>
		
		Codigo da disciplina:<br>
		<select name="codDisc">
			<?php 
				$sql = mysqli_query($conexao, "SELECT codDisc FROM Disciplina");
				while ($linha = $sql->fetch_assoc()){
					echo "<option value=".$linha['codDisc'].">".$linha['codDisc']."</option>";
				}
			?>
        </select><br><br>
		<button type="submit" name="cad_disc">Excluir</button>
		<button type="reset">Limpar</button>
	</form>

</body>
</html>
