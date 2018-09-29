<?php

	class Produto {

		private $nome;
		private $quantidade;
		private $valor;

		public function __construct($nome, $quantidade, $valor) {
			$this->nome = $nome;
			$this->quantidade = $quantidade;
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

		public function getQuantidade() {
			return $this->quantidade;
		}

		public function setQuantidade($quantidade) {
			if ($quantidade > 0) {
				$this->quantidade = $quantidade;
			}
			
		}
	}

?>