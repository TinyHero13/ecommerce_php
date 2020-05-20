<?php

require("../funcoes/conexao.php");

 if(isset($_GET['idproduto'])){
    $idproduto = $_GET['idproduto'];
    $sql = ("SELECT * FROM produtos WHERE idproduto = '$idproduto'");
    $resultado = mysqli_query($conexao,$sql) or die(mysqli_error());
    while($row = mysqli_fetch_array($resultado)){
  
 echo'
  <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
              <div id="carouselExampleIndicators" class="carousel slide"data-ride="carousel">
                  <img src="../imagens/produto/' .$row['img'].'" width="400" height="350" />          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3>' .$row['nome'].'</h3>
              <h2>R$' .$row['preco'].'</h2>
              
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Categoria:</span>'. $row['categoria']. '</a>
                </li>
                <li>
                  <a href="#"><span>Estoque:</span> '.$row['estoque'].'</a>
                </li>
              </ul>
              <p>'.$row['descricao'].'</p>';}}?>
              <div class="card_area">
                <?php
                echo '
                <a class="main_btn"  href="../view/carrinho.php?acao=add&idproduto='.$row['idproduto'].'">Adicionar ao carrinho</a>';
                ?>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-diamond"></i>
                </a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <!--================End Single Product Area =================-->
