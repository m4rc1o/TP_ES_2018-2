<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário HTML - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/format_tl_cadastrar.css">
	<script type="text/javascript" src="js/funcoes1.js"></script>
</head>




<body>
	<?php session_start();?>
	
	<h1><?php echo $_SESSION['nomeUsuario']; ?></h1>
	<h2>Minhas Turmas</h2>

	<form>
		Inscrever-se em uma turma:<br>
		<input type='text' id='txt_turma_add' placeholder="Digite o nome da turma"/>
		<input type='button' value='Inscrever-se' id='btn_add_turma' onclick="addItemListaAluno()" />
	</form>

	<form autocomplete="off" accept="image/jpg, image/png">


		<ul id="lista_turmas" class="content">
			<li><a href="turma_qualquer_aluno.html" class="link_turma" title="Ver detalhes da turma">Matemática discreta</a><span class="close" title="Desinscrever-se">&times;</span></li>
			<li><a href="turma_qualquer_aluno.html" class="link_turma" title="Ver detalhes da turma">Engenharia de Software</a><span class="close" title="Desinscrever-se">&times;</span></li>
			<li><a href="turma_qualquer_aluno.html" class="link_turma" title="Ver detalhes da turma">Estrutura de dados</a><span class="close" title="Desinscrever-se">&times;</span></li>
		<ul id="lista_turmas">


		<!--
		<span style="position: absolute; top: 550px; left: 500px;width: 500px; height: 0px">
			<form autocomplete="off" accept="image/jpg, image/png">
				<button class="turma">Inscrever</button>
				<button class="turma">Sair</button>
			</form>
		</span>
		-->

		<script>
			var closebtns = document.getElementsByClassName("close");
			var i;

			for (i = 0; i < closebtns.length; i++) {
			  closebtns[i].addEventListener("click", function() {
				this.parentElement.style.display = 'none';
			  });
			}
		</script>

	</form>

</body>
</html>
