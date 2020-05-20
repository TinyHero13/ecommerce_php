
<table>
        <tr>
<?php
require("../funcoes/conexao.php");

if(isset($_POST['pesquisar'])){
   $pesquisar = $_POST['pesquisar'];
   $sql = ("SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%'");
   $resultado = mysqli_query($conexao,$sql) or die(mysqli_error());

      $loop = 3;
      $i = 1;

    while($row = mysqli_fetch_array($resultado)) {
      if($i < $loop){

        echo '
        <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
        <td align="center" valign="top">
        <a href="../view/produto.php?idproduto='.$row['idproduto'].'">
        <img src="../imagens/produto/' .$row['img'].'"width="300" height="250" alt="" />
        </a>
        <br />
        <div class="p_icon">
        <a class="black" href="#">
        <i class="ti-eye"></i>
        </a>
        <a class="black" href="#">
        <i class="ti-heart"></i>
        </a>
        <a class="black" href="carrinho.php?acao=add&idproduto='.$row['idproduto'].'">
        <i class="ti-shopping-cart"></i>
        </a>
        </div>
        </div>
        <div class="product-btm">
        ' .$row["nome"].' <br />
        <div class="mt-3">

        R$'. $row["preco"].'<br />'
        ;}
        
        else if($i = $loop){
          echo '
          <td>
          <img src="' .$row['img'].'"width="250" height="200" alt="" />
          </td>
          </tr>
          <tr>
          </a>
        <br />
        <div class="p_icon">
        <a class="black" href="#">
        <i class="ti-eye"></i>
        </a>
        <a class="black" href="#">
        <i class="ti-heart"></i>
        </a>
        <a class="black" href="carrinho.php?acao=add&idproduto='.$row['idproduto'].'">
        <i class="ti-shopping-cart"></i>
        </a>
        </div>
        </div>
        <div class="product-btm">
        ' .$row["nome"].' <br />
        <div class="mt-3">

        R$'. $row["preco"].'<br />';
        }
      }
   
   $i++;
}
  ?>
  </table>
</section>
<br />