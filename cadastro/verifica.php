<?php

session_start();

if(!$_SESSION['usuario']){

    header('location: ../cadastro/login.php');
    exit();
}

?>