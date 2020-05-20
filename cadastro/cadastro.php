
<?php
session_start();

?>


<!DOCTYPE html>
<html>
    <head>
    <style>
</style>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
	<body class="bg1">
    <div class="form-style-6">
		<form name="frmUser" method="post" action="processar.php">
                <?php if(isset($mensagem)) { echo $mensagem; } ?>

                <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <link href="../css/estilo_cadastro.css" rel="stylesheet" id="bootstrap-css">
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Bem-vindo</h3>
                        <p>Você está uma passo mais perto de obter o melhor em tecnologia.</p>
                    </div>
                    <div class="col-md-9 register-right">
      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Cadastro</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Nome e sobrenome:
                                            <input type="text" class="form-control" placeholder="Nome e sobrenome" required ="required" name="nome" value="" />
                                        </div>
                                        <div class="form-group">
                                            Usuário:
                                            <input type="text" class="form-control" placeholder="Usuário" required ="required" name="usuario" value="" />
                                        </div>
                                        <div class="form-group">
                                            E-mail:
                                            <input type="email" class="form-control" placeholder="Email" required ="required" name="email" value="" />
                                                                                                                           
                                           </div>
                                        <div class="form-group">
                                            Senha:
                                            <input type="password" class="form-control" placeholder="Senha" required ="required" name="senha" value="" id="senha" /> <br />
                                            <button type="button" onclick="mostrarSenha()"> <img src="../imagens/olho.png" width="25px" height="25px" id="olho"></button> <br />
                                        </div>
                                        <div class="form-group">
                                            <a href="login.php">Já está cadastrado? Clique aqui.</a>

                                            <?php if(isset($_SESSION['mensagem'])): ?>
                                            <p> <?php echo $_SESSION['mensagem']; ?> </p>
                                            <?php endif; unset($_SESSION['mensagem']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Telefone:
                                            <input type="text" class="form-control" placeholder="Telefone" required ="required" name="tel" value="" /> <br />
                                            
                                        </div>
                                        <div class="form-group">
                                            CPF:
                                            <input type="text" class="form-control" placeholder="CPF" required ="required" name="cpf" value="" /> 
                                            
                                        </div>
                                        <div class="form-group">
                                            Data de nascimento:
                                            <input type="date" class="form-control" placeholder="Data de nascimento" required ="required" name="data" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    Sexo:<br/>
                                                    <input type="radio" name="sexo" value="homem" checked>
                                                    <span> Homem </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo" value="mulher">
                                                    <span>Mulher </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="sexo" value="naodeclarado">
                                                    <span>Não declarado </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Cadastrar"/>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</form>
        <script>
			function mostrarSenha(){
				var tipo = document.getElementById("senha");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
	</body>
</html>
