<?php
	class Connection {
		var $servidor, $user, $senha, $bd, $link;
		function __construct($servidor, $user, $senha, $bd) {
			$this->servidor = $servidor;
			$this->user = $user;
			$this->senha = $senha;
			$this->bd = $bd;
			$this->link = mysqli_connect($servidor, $user, $senha, $bd);
		}
		
		function getLink() {
			if (!$this->link) {
				die("Nao foi possivel conectar!<br>".mysqli_error());
			}
			return $this->link;
		}
	}
?>