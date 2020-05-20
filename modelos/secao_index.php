<?php

//include('verifica_login.php');
require("../funcoes/conexao.php");
 
    $sql = "SELECT * FROM produtos ORDER BY categoria ASC LIMIT 12";
    $resultado = mysqli_query($conexao, $sql);
?>
                        
<!--================ Principais produtos =================-->
<style>
  .black{
    color:black;
  }
  </style>
<div class="hero-image">
  <div class="hero-text">
    <h1 class="verde">A maior loja de equipamentos eletrônicos do Brasil</h1>
    <p class="verde">Permaneça conectado</p>
  </div>
</div>
<br />

<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Principais produtos</span></h2>
            <p>Produtos mais vendidos da loja</p>
          </div>
        </div>
      </div>
      <table>
        <tr>
      <?php 
      $loop = 3;
      $i = 0;

    while($row = mysqli_fetch_array($resultado)) {
      if($i <= $loop){

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

        <a class="black" href="carrinho.php?acao=add&idproduto='.$row['idproduto'].'">
        <i class="ti-shopping-cart"></i>
        </a>
        </div>
        </div>
        <div class="product-btm">
        ' .$row["nome"].' <br />
        <div class="mt-3">

        R$'. $row["preco"].'<br />
        
        ';
      }
        
        else if($i = $loop){
          echo '</tr>
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
  
          <a class="black" href="carrinho.php?acao=add&idproduto='.$row['idproduto'].'">
          <i class="ti-shopping-cart"></i>
          </a>
          </div>
          </div>
          <div class="product-btm">
          ' .$row["nome"].' <br />
          <div class="mt-3">
  
          R$'. $row["preco"].'<br />'
          ;
          $i=0;
        }

        $i++;
    }
      ?>
      </table>
  </section>
  <!--================ Final dos principais produtos=================-->

 