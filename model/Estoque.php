<?php

/**
  * 
  */
 class Estoque {

 	private $produtos;
 	
 	function __construct($produtos) {
 		$this->produtos = $produtos;
 	}

 	public function getProdutos () {
 		return $this->produtos;
 	}

 	public function setProdutos ($produtos) {
 		$this->produtos = $produtos;
 	}

 	public function addProduto ($produto) {
 		$this->setProdutos()
 	}

 } 

 ?>