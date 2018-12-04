<?php
	class Professor extends Usuario {
		var $salario;
		function __construct($cpf, $nome, $email, $sexo="", $senha, $data_nasc, $modalidade, $salario;) {
			parent::__construct($cpf, $nome, $email, $sexo="", $senha, $data_nasc, $modalidade);
			$this->salario = $salario;
		}
		function getDataEntrada() {
			return $this->salario;
		}
	}
?>
