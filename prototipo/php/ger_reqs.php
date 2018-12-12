<?php
	include 'conexao.php';
	session_start();
?>
<?php


	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type');
	header('Content-type: application/json');
	if($_GET['reqId'] == "turmasProf"){
		//echo "\nVocê está solicitando as turmas";

		//Captura o cpf do professor logado
		$cpfProf = $_SESSION['cpfUsuario'];

		//String para consultar as turmas do professor
		$sql = "SELECT codigoTurma FROM Turma WHERE cpfProf="."'$cpfProf'";

		//Primeira operação sobre a tabela Turma - Lendo as turmas do respectivo professor
		//para exibi-las em sua tela inicial
		$resultado = mysqli_query($conexao, $sql);


		//Armazena as turmas no array resposta
		$resposta = [];
		while ($linha = $resultado->fetch_assoc()){
			$codigoTurma = $linha['codigoTurma'];
			/*
			$item = "<li><a href='turma_qualquer_professor.html' class='link_turma' title='Ver detalhes da turma'>".$codigoTurma."</a><span name="."'$codigoTurma'"." class='close' title='Remover turma'>&times;</span></li>";
			*/
			array_push($resposta, $codigoTurma);
		}

		//Envia a resposta ao cliente
		echo json_encode($resposta);

	}else if($_GET['reqId'] == "nomeUsuario"){ 
		echo json_encode($_SESSION['nomeUsuario']);
	}else if($_GET['reqId'] == "profs"){
		$sql = "SELECT cpf, nome FROM Usuario WHERE modalidade='P'";

		//
		$resultado = mysqli_query($conexao, $sql);

		//
		$resposta = [];
		while ($linha = $resultado->fetch_assoc()) {
			$nome = $linha['nome'];
			$cpf = $linha['cpf'];
			$prof = ["nome" => $nome, "cpf" => $cpf];
			array_push($resposta, $prof);
		}

		//Respondendo o cliente com array de códigos de disciplinas
		echo json_encode($resposta);
	}else if($_GET['reqId'] == "disciplinas"){
		$sql = "SELECT codDisc FROM Disciplina";

		//Recuperando todos os códigos das disciplinas
		$resultado = mysqli_query($conexao, $sql);

		//Armazenando os códigos das disciplinas em um array 
		$resposta = [];
		while ($linha = $resultado->fetch_assoc()) {
			$codDisc = $linha['codDisc'];
			array_push($resposta, $codDisc);
		}

		//Respondendo o cliente com array de códigos de disciplinas
		echo json_encode($resposta);
	}else if($_GET['reqId'] == "desvincular"){
		$codTurma = $_GET['codTurma'];

		$sql = "UPDATE Turma SET cpfProf=NULL WHERE codigoTurma="."'$codTurma'";

		if(mysqli_query($conexao, $sql)){
			echo json_encode("Desvinculação realizada com sucesso!");
		}else{
			echo json_encode("Erro, desvinculação não realizada!");
		}
	}else if($_GET['reqId'] == "detalhesTurma"){
		$codTurma = $_GET['codTurma'];

		$sql = "SELECT * FROM Turma WHERE codigoTurma="."'$codTurma'";

		$resultado = mysqli_query($conexao, $sql);

		$linha = $resultado->fetch_assoc();
		$turma = ["vagas" => $linha['vagas'],
				"codDisc" => $linha['codDisc'],
				"cpfProf" => $linha['cpfProf']
				];
		
		echo json_encode($turma);
	}else if($_GET['reqId'] == "altTurma"){
		$novoCod = $_GET['novoCod'];
		$codAnt = $_GET['codAnt'];

		$sql = "UPDATE Turma SET codigoTurma="."'$novoCod'"." WHERE codigoTurma="."'$codAnt'";

		if(mysqli_query($conexao, $sql)){
			echo json_encode("Turma alterada com sucesso!");
		}else{
			echo json_encode("Erro! A turma não foi alterada!");
		}
	}else if($_GET['reqId'] == "deletarTurma"){
		$codTurma = $_GET['codTurma'];

		$sql = "DELETE FROM Turma WHERE codigoTurma="."'$codTurma'";

		if(mysqli_query($conexao, $sql)){
			echo json_encode("Turma excluída com sucesso!");
		}else{
			echo json_encode("Erro! A turma não foi excluída!");
		}
	}

	//Fecha a conexão com o BD
	$conexao->close();
?>