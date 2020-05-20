<?php
    session_start();
    require("../funcoes/conexao.php");
    mysqli_select_db($conexao, "banco_site");

            $nome = $_POST["nome"]; 
            //$email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];          
            //$cpf = $_POST["cpf"];
            $data = $_POST["data"];
            $sexo = $_POST["sexo"];
            $telefone = $_POST["tel"];

            $_SESSION["email"] = $_POST["email"];

            
            $email = mysqli_real_escape_string($conexao, $_POST["email"]);           
            $cpf = mysqli_real_escape_string($conexao, $_POST["cpf"]); 
            
            // query: verifica se há algum registro que contenha o mesmo e-mail na tabela
            $query1 = "SELECT email FROM usuarios WHERE email = '$email'";
            $result1 = mysqli_query($conexao, $query1);
            $row1 = mysqli_num_rows($result1);

            $query2 = "SELECT cpf FROM usuarios WHERE cpf = '$cpf'";
            $result2 = mysqli_query($conexao, $query2);
            $row2 = mysqli_num_rows($result2);
            
    

       
// se existir valor na variavel e for maior que 0 o retorno,
// indica que o usuário já está cadastro (email ja existe)
if($row1 > 0 && $row2 > 0 ){
$_SESSION['mensagem'] = "E-mail e CPF já em uso...";
header("location:cadastro.php");
}


else if($row1 > 0){   
$_SESSION['mensagem'] = "E-mail já está em uso";
header("location:cadastro.php");
}

else if($row2 > 0){

    $_SESSION['mensagem'] = "CPF inválido"; 
    header("location:cadastro.php");

}

else {
            $inserir = "INSERT INTO usuarios (idusuario, nome, email, usuario, senha, cpf, data_nasc, sexo, telefone) VALUES (NULL, '$nome', '$email', '$usuario', '$senha','$cpf', '$data', '$sexo','$telefone');";            
            mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));            
            header("location:login.php");
            $resultado = mysqli_query($conexao, $sql);          
            $_SESSION['mensagem'] = "Cadastrado com sucesso, faça o login." ;          
}              
?>  
            
            
          
            
