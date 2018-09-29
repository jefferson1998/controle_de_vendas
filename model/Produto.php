<?php

	class Produto {

		private $nome;
		private $quantidade;

		public function __construct($nome, $quantidade) {
			$this->nome = $nome;
			$this->quantidade = $quantidade;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome) {
			$this->nome = $nome;
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