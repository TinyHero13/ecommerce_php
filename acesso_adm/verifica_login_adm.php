<?php

session_start();
if(!$_SESSION['adm']){

    header('location: login_adm.php');
    exit();
}

?>