<?php
	class Turma {
		var $codigoTurma, $vagas, $fk_codDisc;
		function __construct($codigoTurma, $vagas, $fk_codDisc) {
			$this->codigoTurma = $codigoTurma;			
			$this->vagas = $vagas;
			$this->fk_codDisc = $fk_codDisc;
		}
		function getCodigoTurma() {
			return $this->codDisc;
		}
		function getVagas() {
			return $this->nomeDisc;
		}
		function getCodDisc() {
			return $this->fk_codDisc;
		}
	}
?>

