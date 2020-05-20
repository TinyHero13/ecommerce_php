<?php
require("../funcoes/conexao.php");

?>

<center>
<h3 >
<span class="text-muted">Compra efetuada por <?php echo $_SESSION['usuario']; ?> bem sucedida.</span>
</h3>
<br>
<br>
        

        <div class="col-md-4 mb-4">

          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Itens comprados</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$<?php echo $_SESSION["total"];?></strong>
            </li>
          </ul>
            <br>
            <br>

            <div class="checkout_btn_inner">
                 <a class="gray_btn" href="../view/historico.php">Histórico de compras</a>
                 <a class="main_btn" href="index.php">Compre mais</a>
                 </div>
          

        </div>

      </div>

    </div>
    </center>
  </main>


 