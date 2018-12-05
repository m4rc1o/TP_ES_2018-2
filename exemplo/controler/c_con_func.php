<?php
	include_once("../model/funcionario.php");
	include_once("../persistence/connection.php");
	include_once("../persistence/funcionarioDao.php");

	$nome = $_POST["nome"];
	$f1 = new Funcionario($nome);
	
	$conexao =  new Connection("localhost", "root", "", "teste");
	$link = $conexao->getLink();
	
	$funcDao = new FuncionarioDao();
	//$funcDao->consultar($link, $f1);
	$res = $funcDao->todosFuncionarios($link);	
	
	if ($res) {
		echo "<html><body>";
		echo "<table border = '15%'><tr><th>Nome</th><th>Salario</th><th>Data</th></tr>";
		
		while ($row = mysqli_fetch_row($res)) {
			echo "<tr><td>".$row[0]."</td><td>" . $row[1]."</td><td>".$row[2]."</td></tr>";
		}
		
		echo "</table>";
		echo "</body></html>";		
	}
	else {
		echo "0 resuls";
	}
?>