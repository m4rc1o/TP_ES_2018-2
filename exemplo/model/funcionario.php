<?php
	class Funcionario {
		var $nome, $salario, $data;
		function __construct($nome, $salario = "", $data = "") {
			$this->nome = $nome;
			$this->salario = $salario;
			$this->data = $data;
		}
		
		function getNome() {
			return $this->nome;
		}
		
		function getSalario() {
			return $this->salario;
		}
		
		function getData() {
			return $this->data;
		}
	}
?>