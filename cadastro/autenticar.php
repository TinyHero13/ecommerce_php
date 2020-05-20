<?php   

session_start();
include("../funcoes/conexao.php");
   
if(empty($_POST['usuario']) || empty($_POST['senha'])){

    header("location: login.php");
    exit();
}

            $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
            $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
         
            $query = "SELECT usuario, senha  FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            $result = mysqli_query($conexao, $query);          
            $row = mysqli_num_rows($result);     
                           
            if($row == 1){

                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;

                header('location: ../view/index.php');
                exit();
                
            } else { 
                $_SESSION['Não_autenticado'] = true;
               header("location: login.php");
               exit();
            }
?>
 