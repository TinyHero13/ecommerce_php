<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../css/cadastro_estilo.css">
</head>
<body>
<div class="form-style-6">
<h1>Acesso administrativo</h1>
<form name="frmUser" method="POST" action="autenticar_adm.php">


<?php 
 if(isset($_SESSION['Não_autenticado_adm'])):
?>
<p color="red"> Erro: 4c3ss0 n3g#d$. </P>
<?php
endif;
unset($_SESSION['Não_autenticado_adm']);
?>

<input type="password" name="chave" required="required" placeholder="cH4ve" />
<input type="text" name="adm" required="required" placeholder="Administrador" />
<input type="password" name="senha_adm" required="required" placeholder="Passe" id="pass" /><br>
<button type="button" onclick="mostrarSenha()"><img src="../imagens/olho.png" width="25px" height="25px" id="olho"></button><br><br>
<input type="submit" value="Enviar" /><br /><br />
</form>
</div>
<script>
			function mostrarSenha(){
				var tipo = document.getElementById("pass");
				if(tipo.type == "password"){
					tipo.type = "text";
                    
				}else{
					tipo.type = "password";
				}
			}
		</script>
</body>
</html>