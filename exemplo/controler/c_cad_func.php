<?php
	include_once("../model/funcionario.php");
	include_once("../persistence/connection.php");
	include_once("../persistence/funcionarioDao.php");

	$nome = $_POST["nome"];
	$salario = $_POST["sal"];
	$data = $_POST["data"];
	$f1 = new Funcionario($nome, $salario, $data);
	
	echo "Nome: ";
	echo $f1->getNome()."<br>";
	echo "Salario: ";
	echo $f1->getSalario()."<br>";
	echo "Data: ";
	echo $f1->getData()."<br>";
	
	$conexao =  new Connection("localhost", "root", "", "teste");
	$link = $conexao->getLink();
	
	$funcDao = new FuncionarioDao();
	$funcDao->cadastrar($link, $f1);
?>