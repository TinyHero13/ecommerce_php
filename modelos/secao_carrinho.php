<?php 
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } //adiciona produto 
  
  if(isset($_GET['acao'])){ 
    //ADICIONAR CARRINHO 
    if($_GET['acao'] == 'add'){ 
      $id = intval($_GET['idproduto']); 
      if(!isset($_SESSION['carrinho'][$id])){ 
        $_SESSION['carrinho'][$id] = 1; 
      } else { 
        $_SESSION['carrinho'][$id] += 1; 
      } 
    } //REMOVER CARRINHO 
  
    if($_GET['acao'] == 'del'){ 
      $id = intval($_GET['idproduto']); 
      if(isset($_SESSION['carrinho'][$id])){ 
        unset($_SESSION['carrinho'][$id]); 
      } 
    } //ALTERAR estoque 
    if($_GET['acao'] == 'up'){ 
      if(is_array($_POST['prod'])){ 
        foreach($_POST['prod'] as $id => $qtd){
            $id  = intval($id);
            $qtd = intval($qtd);
            if(!empty($qtd) || $qtd <> 0){
              $_SESSION['carrinho'][$id] = $qtd;
            }else{
              unset($_SESSION['carrinho'][$id]);
            }
        }
      }
    }
   }

?>

<section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Produto</th>
                  <th scope="col">estoque</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Total</th>
                  <th scope="col">Excluir</th>
                </tr>
              </thead>
              <form action="?acao=up" method="POST">
              <tbody>

              <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '          
            <tr>
          <td colspan="5">Não há produto no carrinho &nbsp;  
          <a class="gray_btn" href="index.php">Adicione produtos</a> </td>        
        </tr>      
              
      ';

           
                      
    
          } else {
            require("../funcoes/conexao.php");
            $total = 0;
            foreach($_SESSION['carrinho'] as $id => $qtd){

                    $sql = "SELECT * FROM produtos WHERE idproduto = '$id'";
                    $resultado = mysqli_query($conexao,$sql) or die(mysqli_error());
                    $row = mysqli_fetch_assoc($resultado);
                    $nome = $row['nome'];
                    $preco = number_format($row['preco'], 2, ',', '.');
                    $sub   = number_format($row['preco'] * $qtd, 2, ',', '.');
                    $total += $row['preco'] * $qtd;

                   
                     echo '
                     <tr>       
                     <td> 
                     <div class="media">
                      <div class="d-flex">
                        <img src="img/product/single-product/cart-1.jpg" alt=""/>
                      </div>
                      <div class="media-body">
                        <p>'.$nome.'</p>
                      </div>   
                      </td>
                      <td>
                    <div class="product_count">
                <input type="number" size="3" name="prod['.$id.']" value="'.$qtd.'" />
                    </div>
                    </td>                
                <td><h5>R$ '.$preco.'</h5></td>

                <td><h5>R$ '.$sub.'<h5></td>
                <td><a href="?acao=del&idproduto='.$id.'">Remover</a></td>
                  </tr>                                   
            
                ';    }
                $total = number_format($total, 2, ',', '.');
                $_SESSION["total"]= $total;
                
                echo '<tr class="bottom_button">
                <td>               
               <input type="submit" class="gray_btn" value="Atualizar Carrinho" />
             </td>                             
           </tr>
           <tr>                  
             <td>
               <h5>Subtotal</h5>
             </td>
             <td>
               <h5>'.$total.'</h5>
             </td>
           </tr>                                            
             <tr class="out_button_area">
             <td></td>
             <td></td>
             <td></td>
             <td>
               <div class="checkout_btn_inner">
                 <a class="gray_btn" href="index.php">Continue comprando</a>
                 <a class="main_btn" href="../funcoes/processa_carrinho.php">Finalizar compra</a>
               </div>
             </td>
           </tr>';   

           if(isset($_SESSION['usuario']) != 0 ){ 
           
           unset($_SESSION['carrinho']); 
           }
           }?>

        
                </tbody>
              </form>
            </table>
          </div>
        </div>
      </div>
    </section>

                                  
                 



             