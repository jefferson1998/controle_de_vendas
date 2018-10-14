<?php

	class Saida {
		
		private $produto;
		private $dinheiroGanho;

		public function __construct($produto) {
			$this->produto = $produto;
		} 

		public function setProduto($produto) {
			if($produto->getValor() > 0) {
				$this->produto = $produto;
			}
		}

		public function getDinheiroGanho() {
			return $this->dinheiroGanho;
		}

		public function setDinheiroGanho($dinheiroGanho) {
			if($dinheiroGanho > 0) {
				$this->dinheiroGanho = $dinheiroGanho;
			}
		}

	}







