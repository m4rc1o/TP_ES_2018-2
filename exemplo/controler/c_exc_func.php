<?php
	include_once("../model/funcionario.php");
	include_once("../persistence/connection.php");
	include_once("../persistence/funcionarioDao.php");

	$nome = $_POST["nome"];
	$f1 = new Funcionario($nome);

	$conexao =  new Connection("localhost", "root", "", "teste");
	$link = $conexao->getLink();
	
	$funcDao = new FuncionarioDao();
	$funcDao->excluir($link, $f1);
?>