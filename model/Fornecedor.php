<?php
	
	class Fornecedor {

		private $nome;
		private $arrayProdutos;

	public function __construct($nome) {
		$this->nome = $nome;
		$this->arrayProdutos = array();
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getArrayProdutos(){
		return $this->arrayProdutos;
	}

	public function setArrayProdutos($arrayProdutos) {
		$this->arrayProdutos = $arrayProdutos;
	}

	public function addProduto($novoProduto) {
		$this->arrayProdutos[] = $novoProduto;
	}

}

?>