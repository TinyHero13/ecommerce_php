<?php

include('verifica_login_adm.php');
include("../funcoes/conexao.php");
    
    $sql = "DELETE FROM produtos WHERE idproduto ='" . $_GET["idproduto"] . "'";
    mysqli_query($conexao, $sql);
    
    header("Location:tabela.php");
?>