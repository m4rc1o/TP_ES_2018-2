<?php
	class Aluno extends Usuario {
		var $data_entrada;
		function __construct($cpf, $nome, $email, $sexo="", $senha, $data_nasc, $modalidade, $data_entrada;) {
			parent::__construct($cpf, $nome, $email, $sexo="", $senha, $data_nasc, $modalidade);
			$this->data_entrada = $data_entrada;
		}
		function getDataEntrada() {
			return $this->data_entrada;
		}
	}
?>

