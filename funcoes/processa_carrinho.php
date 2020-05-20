<?php

session_start();
if(!$_SESSION['usuario'] || !$_SESSION['senha']){
    $_SESSION['menssagem'] ="Você não está logado, logue para finalizar a compra!";

    header('location: ../cadastro/login.php');
    exit();
}
else{
    header('location: ../view/final.php');
}

?>