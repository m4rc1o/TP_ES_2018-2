<?php
	class FuncionarioDao {
		function __construct() {
		}
		
		function cadastrar($link, $f) {
			$sql = "insert into Funcionario (nome, salario, data) values ('".$f->getNome()."', ".$f->getSalario().", '".$f->getData()."')";
			echo $sql;
	
			if (!mysqli_query($link, $sql)) {
				die("Nao foi possivel salvar seus dados!<br>".mysqli_error($link));
			}
			echo "Salvo com sucesso!<br>";
		}
		
		function consultar($link, $f) {
			if ($f->getNome() != NULL) {
				$sql = "select * from Funcionario where nome = '".$f->getNome()."'";
				$r = mysqli_query($link, $sql);
				if (!$r) {
					die("Nao foi possivel encontrar seus dados!<br>".mysqli_error($link));
				}
				
				$rs = $r->fetch_array();
				
				echo "Nome: ";
				echo $rs[0]."<br>";
				echo "Salario: ";
				echo $rs[1]."<br>";
				echo "Data: ";
				echo $rs[2]."<br>";
			}
		}
		
		function todosFuncionarios($link) {
			$sql = "select * from Funcionario";
			$r = mysqli_query($link, $sql);
			if (!$r) {
				die("Nao foi possivel encontrar seus dados!<br>".mysqli_error($link));
			}
			return $r;
		}
		
		function alterar() {
		}
		
		function excluir($link, $f) {
			$sql =  "delete from Funcionario where nome = '".$f->getNome()."'";
			$r = mysqli_query($link, $sql);
			if (!$r) {
				die("Nao foi possivel excluir seus dados!<br>".mysqli_error($link));
			}
				
			echo "Excluido com sucesso!";
		}
	}
?>