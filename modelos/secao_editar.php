<?php
include('verifica_login_adm.php');
require("../funcoes/conexao.php");
	

	$select_query = "SELECT * FROM produtos WHERE idproduto ='" . $_GET["idproduto"] . "'";
	$result = mysqli_query($conexao, $select_query);
	$row = mysqli_fetch_array($result);
?>
            <link href="style2.css" rel="stylesheet" type="text/css">
            <div style="width:500px;margin:auto;">
            <div class="form-style-2">
				<a href="tabela.php" class="link">
					<img alt='List' title='List' src='images/list.png' width='15px' height='15px'/>
					Listagem de produtos
				</a>
			</div>
            <div class="form-style-2">
            <div class="form-style-2-heading"></div>
            <form action="../acesso_adm/processa_editar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idproduto" class="txtField" value="<?php echo $row['idproduto']; ?>">
            <label for="field1"><span>Nome:<span class="required"></span></span><input type="text" class="input-field" name="nome" value="<?php echo $row['nome']; ?>" /></label>
            <label for="field2"><span>Valor:<span class="required"></span></span><input type="text" class="input-field" name="preco" value="<?php echo $row['preco']; ?>" /></label>
            <label><span>Categoria:<span class="required"></span></span><input type="text" class="input-field" name="categoria" value="<?php echo $row['categoria']; ?>" /></label>
            <label><span>Descrição:<span class="required"></span></span><input type="text" class="input-field" name="descricao"value="<?php echo $row['descricao']; ?>" /></label>
            <label><span>Estoque:<span class="required"></span></span><input type="text" class="input-field" name="estoque" value="<?php echo $row['estoque']; ?>" /></label>
            <label><span> </span><input type="submit" value="Enviar" /></label>
            </div>      
            </div>      
            </div>

            </form>
             


		