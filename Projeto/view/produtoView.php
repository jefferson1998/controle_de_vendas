<!DOCTYPE html>
<html>
<head>
	<title>CadastroProduto</title>
</head>
<body>
	<?php  
		require "model\Produto.php";

		$produto = new Produto("Coxinha", 2.00);

		echo $produto->getNome();

		echo "<br>" . $produto->getQuantidade();

		$produto->setQuantidade(-1);

		echo "<br>" . s;
	?>
</body>
</html>