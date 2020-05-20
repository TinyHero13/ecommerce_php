<?php   

session_start();
include("../funcoes/conexao.php");
   
if(empty($_POST['chave']) || empty($_POST['adm']) || empty($_POST['senha_adm'])){

    header("location: login_adm.php");
    exit();
}
            $chave = mysqli_real_escape_string($conexao, $_POST['chave']);
            $adm = mysqli_real_escape_string($conexao, $_POST['adm']);
            $senha_adm = mysqli_real_escape_string($conexao, $_POST['senha_adm']);
            

            $query = "SELECT chave, adm, senha_adm FROM ADM WHERE chave = '$chave' AND adm = '$adm' AND senha_adm = '$senha_adm'";
            $result = mysqli_query($conexao, $query);
            $row = mysqli_num_rows($result);
            
            if($row == 1){

                $_SESSION['chave'] = $chave;
                $_SESSION['adm'] = $adm;
                $_SESSION['senha_adm'] = $senha_adm;

                header('location: restrito.php');
                exit();
                
            } else { 
                $_SESSION['Não_autenticado_adm'] = true;
               header("location: login_adm.php");
               exit();
            }
?>
 