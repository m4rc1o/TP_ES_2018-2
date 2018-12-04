<?php
	class Disciplina {
		var $codDisc, $nomeDisc;
		function __construct($codDisc, $nomeDisc) {
			$this->codDisc = $codDisc;			
			$this->nome = $nomeDisc;
		}
		function getCodDisc() {
			return $this->codDisc;
		}
		function getNomeDisc() {
			return $this->nomeDisc;
		}
	}
?>
