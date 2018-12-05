<?php
	class UsuarioDao {
		function __construct() {
		}
		
		function cadastrar($link, $u) {
			$sql = "INSERT INTO Usuario(cpf, nome, email, sexo, senha, data_nasc, modalidade) 
			VALUES ('".$u->getCpf()."', ".$u->getNome().", '".$u->getEmail()."', '".$u->getSenha()."', '".$u->getSexo()."', '".$u->getDataNasc()."', '".$u->getModalidade()."')";
			echo $sql;

			if (!mysqli_query($link, $sql)) {
				die("Nao foi possivel salvar seus dados!<br>".mysqli_error($link));
			}
			echo "Salvo com sucesso!<br>";
		}
		
		function consultar($link, $u) {
			if ($u->getNome() != NULL) {
				$sql = "SELECT * FROM Usuario WHERE cpf = '".$u->getCpf()."'";
				$r = mysqli_query($link, $sql);
				if (!$r) {
					die("Nao foi possivel encontrar seus dados!<br>".mysqli_error($link));
				}
				
				$rs = $r->fetch_array();
				//Imprimindo alguns campos
				echo "CPF: ";
				echo $rs[0]."<br>";
				echo "Nome: ";
				echo $rs[1]."<br>";
				echo "Email: ";
				echo $rs[2]."<br>";
			}
		}
		
		function todosUsuarios($link) {
			$sql = "SELECT * FROM Usuario";
			$r = mysqli_query($link, $sql);
			if (!$r) {
				die("Nao foi possivel encontrar seus dados!<br>".mysqli_error($link));
			}
			return $r;
		}
		
		function alterar() {
			/*
			$sql =  "UPDATE Usuario WHERE cpf = '".$u->getCpf()."'";
			$r = mysqli_query($link, $sql);
			UPDATE empregados set nome='João da Silva',cidade='São Paulo' where codigo_empregado=2
			if (!$r) {
				die("Nao foi possivel excluir seus dados!<br>".mysqli_error($link));
			}
				
			echo "Alterado com sucesso!";*/
		}
		
		function excluir($link, $u) {
			$sql =  "DELETE FROM Usuario WHERE cpf = '".$u->getCpf()."'";
			$r = mysqli_query($link, $sql);
			if (!$r) {
				die("Nao foi possivel excluir seus dados!<br>".mysqli_error($link));
			}
				
			echo "Excluido com sucesso!";
		}
	}
?>