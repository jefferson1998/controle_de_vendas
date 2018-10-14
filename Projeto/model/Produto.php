<?php

	class Produto {

		private $nome;
		private $valor;

		public function __construct($nome, $valor) {
			$this->nome = $nome;
			$this->valor = $valor;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function getValor(){
			return $this->valor;
		}

		public function setValor($valor) {
			if ($valor > 0) {
				$this->valor = $valor;			
			}
			
		}

	}

?>