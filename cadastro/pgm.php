<?php   

session_start();
include("../funcoes/conexao.php");
   
if(empty($_POST['usu']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['CPF']) ){

    header("location: ../view/final.php");
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usu']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$cpf = mysqli_real_escape_string($conexao, $_POST['CPF']);

if(isset($_SESSION['usuario'])){

$sessao1 = $_SESSION['usuario'];

}


if(isset($_SESSION['senha'])){

$sessao2 = $_SESSION['senha'];    
    
}
        
               

//  tem que ser feito para a tabela pedidos difícil porém necessário ou não 
if($row == 1 && $row1 ==1 && $row2 == 1){
 
    header('location: ../view/compra_r.php');
    exit();
    
} else { 

    $_SESSION['Não_autenticado2'] = true;
   header("location: ../view/final.php");
   exit();
}
?>
 