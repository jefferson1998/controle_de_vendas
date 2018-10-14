<?php
// https://www.w3schools.com/php/php_arrays.asp
// verificar esse site para ver como funciona o array.

	class Entrada {

		private $produto = array();
		private $dinheiroGasto;

		public function __construct($produto) {
			if($produto->getValor() > 0) {
				$this->produto = array($produto);
			}
		} 

		public function getListaDeProdutos() {
			return $this->produto;
		}

		public function setProduto($produto) {
			if($produto->getValor() > 0) {
				$this->produto = $produto;
			}
		}

		public function getDinheiroGasto() {
			return $this->dinheiroGasto;
		}

		public function setDinheiroGasto($dinheiroGasto) {

			if($dinheiroGasto > 0) {
				$this->dinheiroGasto = $dinheiroGasto;
			}
		}

	}







