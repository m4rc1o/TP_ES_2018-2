<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// Este arquivo serve serve de cabeçalho para todos os arquivos
		// que realizam conexão com o banco de dados
		
		header('Content-Type: text/html; charset=utf-8');

		$nomeServidor = "localhost";
		$nomeUsuario = "root";
		$senha = "lamp123";
		$nomeBD = "avadesk1";


		// Cria a conexao
		$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBD);
		
		// Verifica a conexao
		if ($conexao->connect_error) {
		    die("A conexão falhou: " . $conexao->connect_error);
		} 
	?>
</body>
</html>
