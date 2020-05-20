<?php
session_start();
?>
<html>
<head>

</head>
<body class="bg1">
<div class="form-style-6">
<form name="frmUser" method="POST" action="autenticar.php">

				<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <link href="../css/estilo_cadastro.css" rel="stylesheet" id="bootstrap-css">
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Bem-vindo de volta</h3>
                        <p>Você está uma passo mais perto de obter o melhor em tecnologia</p>
                      
                    </div>
                    <div class="col-md-9 register-right">
      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Usuário" required = "required"name="usuario" value="" />
                                        </div>

                                        <div class="form-group">
                                            <a href="cadastro.php">Não está cadastrado? Clique aqui para se cadastrar.</a><br />
                                            <?php if(isset( $_SESSION['menssagem'])){echo  $_SESSION['menssagem'];} ?>
                                            <?php if(isset($_SESSION['Não_autenticado'])): ?>
                                                <p> Erro: Usuário ou senha inválidos. </P>
                                            <?php endif; unset($_SESSION['Não_autenticado']); ?>

                                            <?php if(isset($_SESSION['mensagem'])):?>
                                                <p> <?php echo $_SESSION['mensagem']; ?> </p>                                        
                                            <?php endif; unset($_SESSION['mensagem']); ?>

                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
									<div class="form-group">
                                            <input type="password" class="form-control" placeholder="Senha" name="senha" required="required" value="" id="senha" /><br>
                                            <button type="button" onclick="mostrarSenha()"> <img src="../imagens/olho.png" width="25px" height="25px" id="olho"></button> <br><br>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Entrar"/>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</form>
</div>
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