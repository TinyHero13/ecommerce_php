<link href="style2.css" rel="stylesheet" type="text/css">
			<div style="width:500px;margin:auto;">
			<div class="mensagem">
				<?php if(isset($message)) { echo $message; } ?>

                <div class="form-style-2">
				<a href="" class="link">
					<img alt='List' title='List' src='images/list.png' width='15px' height='15px'/>
					Listagem de Produtos
				</a>
			</div>
            <div class="form-style-2">
            <div class="form-style-2-heading"></div>
            <form action="../acesso_adm/processa_inserir.php" method="post" enctype="multipart/form-data">
            <label for="field1"><span>Nome:<span class="required"></span></span><input type="text" class="input-field" name="nome" value="" /></label>
            <label for="field2"><span>Valor:<span class="required"></span></span><input type="text" class="input-field" name="preco" value="" /></label>
            <label><span>Imagem:<span class="required"></span></span><input type="file" name="arquivo" value="" /></label>
            <label><span>Categoria:<span class="required"></span></span><input type="text" class="input-field" name="categoria" value="" /></label>
            <label><span>Descrição:<span class="required"></span></span><input type="text" class="input-field" name="descricao" value="" /></label>
            <label><span>Estoque:<span class="required"></span></span><input type="text" class="input-field" name="estoque" value="" /></label>
            <label><span> </span><input type="submit" value="Enviar" /></label>
            </div>      
			</div>
            </form>
            
