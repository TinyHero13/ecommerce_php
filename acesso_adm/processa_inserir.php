<?php

    include('../funcoes/conexao.php');   

    if(isset($_FILES['arquivo'])){
        //pega os ultimos 4 caracteres da string
        //strtolower deixa tudo em minusculo
        $novo_nome = md5(time()) . ".jpg";
        $diretorio = "../imagens/produto/";
    
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);//efetua o upload
        //pega o nome do arquivo de acordo com a hora
    }    

            $nome = $_POST["nome"]; 
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];
            $categoria = $_POST["categoria"];
            $estoque = $_POST["estoque"];
            $img = $_FILES['arquivo'];

         
			$sql = "INSERT INTO produtos (idproduto, nome, descricao, preco, img, categoria, estoque) VALUES (NULL, '$nome', '$descricao', '$preco', '$novo_nome', '$categoria', '$estoque')";
            mysqli_query($conexao, $sql) or die (mysqli_error($conexao));   
            //$resultado = mysqli_query($conexao, $sql); 
            header("location:tabela.php");
?>