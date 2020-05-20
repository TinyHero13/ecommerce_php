<?php

//include('verifica_login.php');
require("../funcoes/conexao.php");

$usuario = $_SESSION['usuario'];
$nome = $_POST["nome"];
$email = $_POST["email"];
$usu = $_POST["usu"];
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senha2 = $_POST["senha2"];
$cpf = $_POST["cpf"]; 
$data = $_POST["data"];        
$sexo = $_POST["sexo"];
$tel = $_POST["tel"];

#$email = mysqli_real_escape_string($conexao, $_POST["email"]);
#$query1 = "SELECT email FROM usuarios WHERE email = '$email'";
#$result1 = mysqli_query($conexao, $query1);
#$row1 = mysqli_num_rows($result1);

#$cpf = mysqli_real_escape_string($conexao, $_POST["cpf"]);
#$query2 = "SELECT cpf FROM usuarios WHERE cpf = '$cpf'";
#$result2 = mysqli_query($conexao, $query2);
#$row2 = mysqli_num_rows($result2); 
         
$query = "SELECT senha  FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
$result = mysqli_query($conexao, $query);          
$row = mysqli_num_rows($result);   

if($row == 1) {
		$sql = "UPDATE usuarios set nome='$nome', email='$email', usuario='$usu', senha='$senha2', cpf='$cpf', data_nasc='$data', sexo='$sexo', telefone='$tel'  WHERE senha = '$senha'";
		mysqli_query($conexao, $sql);
		$message = "Registro modificado com sucesso!";
  }
  else {}S
?>