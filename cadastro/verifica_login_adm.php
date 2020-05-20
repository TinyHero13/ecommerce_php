<?php

session_start();

if(!$_SESSION['adm']){

    header('location: loginadm.php');
    exit();
}

?>