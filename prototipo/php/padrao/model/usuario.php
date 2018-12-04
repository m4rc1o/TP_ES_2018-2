<?php
	class Usuario {
		var $cpf, $nome, $email, $sexo, $senha, $data_nasc, $modalidade;
		function __construct($cpf, $nome, $email, $sexo="", $senha, $data_nasc, $modalidade) {
			$this->cpf = $cpf;			
			$this->nome = $nome;
			$this->email = $email;
			$this->sexo = $sexo;
			$this->senha = $senha;
			$this->data_nasc = $data_nasc;
			$this->modalidade = $modalidade;
		}
		
		function getCpf() {
			return $this->cpf;
		}
		function getNome() {
			return $this->nome;
		}
		function getEmail() {
			return $this->email;
		}
		function getSexo() {
			return $this->sexo;
		}
		function getSenha() {
			return $this->senha;
		}
		function getDataNasc() {
			return $this->data_nasc;
		}
		
		function getModalidade() {
			return $this->modalidade;
		}
	}
?>

