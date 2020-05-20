<?php
    include('../funcoes/conexao.php');   
	if(count($_POST) > 0) {
		$sql = "UPDATE produtos set nome='" . $_POST["nome"] . "', descricao='" . $_POST["descricao"] . "', preco='" . $_POST["preco"] . "',  categoria='" . $_POST["categoria"] . "'  WHERE idproduto='" . $_POST["idproduto"] . "'";
		mysqli_query($conexao, $sql) or die (mysqli_error($conexao));   
		//$resultado = mysqli_query($conexao, $sql); 
		header("location:tabela.php");
	}
    ?>