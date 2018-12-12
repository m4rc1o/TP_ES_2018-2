<?php
	// Este arquivo serve de cabeçalho para todos os arquivos
	// que realizam conexão com o banco de dados
	
	header('Content-Type: text/html; charset=utf-8');

	$nomeServidor = "localhost";
	$nomeUsuario = "root";
	$senha = "1111011";
	$nomeBD = "avadesk";


	// Cria a conexao
	$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBD);
	
	// Verifica a conexao
	if ($conexao->connect_error) {
	    die("A conexão falhou: " . $conexao->connect_error);
	} 
?>
