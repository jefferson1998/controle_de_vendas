<?php

/**
  * 
  */
 class Estoque {

 	private $arrayProdutos;
 	private $recebido = 0;
 	private $gasto = 0;
 	
 	function __construct($produtos) {
 		$this->arrayProdutos = $produtos;
 		$this->recebido = 0
 		for ($i=0; $i < sizeof($produtos); $i++) { 
 			$this->gasto = $this->gasto + ($produtos[$i]->getValor() * $produtos->getQuantidade());
 		}
 	}

 	public function getArrayProdutos () {
 		return $this->produtos;
 	}

 	public function setArrayProdutos ($produtos) {
 		$this->produtos = $produtos;
 	}

 	public function removerProduto ($produto) {
 		$this->setProdutos()
 	}

 } 

 ?>