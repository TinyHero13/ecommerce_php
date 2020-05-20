<?php

include('verifica_login_adm.php');
include("../funcoes/conexao.php");
    
    $sql = "DELETE FROM usuarios WHERE idusuario ='" . $_GET["idusuario"] . "'";
    mysqli_query($conexao, $sql);
    
    header("Location:tabela.php");
?>