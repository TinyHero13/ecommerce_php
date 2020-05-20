<?php
 require("../funcoes/conexao.php");

 $email = $_SESSION["email"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' ";
    $resultado1 = mysqli_query($conexao, $sql);


    $sql2 = "SELECT * FROM produtos ORDER BY nome ASC";
    $resultado2 = mysqli_query($conexao, $sql2);
?>

   
  <div id="content-wrapper">
  <div class="container-fluid">


  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Informações    
  
</div>
    <div class="card-body">

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Usuário</th>
              <th>CPF</th>
              <th>Telefone</th>
              <th>Sexo</th>
              <th>Data de nascimento</th>
              <th>Funções</th>
            </tr>          
            </tr>
            <?php
           
                        $r = 0;
                        while($row = mysqli_fetch_array($resultado1)) {

                          $datePOST = new DateTime($row["data_nasc"]); 
                    ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                    <td><?php echo $row["idusuario"]; ?></td>

                    <td><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["usuario"]; ?></td>                    
                    <td><?php echo $row["cpf"]; ?></td>                  
                    <td><?php echo $row["telefone"]; ?></td>                   
                    <td><?php echo $row["sexo"]; ?></td>
                    <td><?php echo $datePOST->format('d/m/Y');?></td> 
                    <td>
                        <a href="deletar.php?idusuario=<?php echo $row["idusuario"]; ?>"  class="link">
                            <img alt="Delete" title="Delete" src="images/delete.png" width="15px" height="15px" hspace="10" />
                        </a>
                    </td>
                </tr>
                    <?php
                        $r++;
                        }
                    ?>
         </table>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Historico    
          </div>
      
            <div class="card-body">

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Preço</th>
      

            </tr>          
            </tr>
            <?php
           
                        $r = 0;
                        while($row2 = mysqli_fetch_array($resultado2)) {

                    ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                    <td><?php echo $row2["idproduto"]; ?></td>

                    <td><?php echo $row2["nome"]; ?></td>
                    <td><?php echo $row2["estoque"]; ?></td>
                    <td><?php echo $row2["preco"]; ?></td>                    
                    </tr>
                    <?php
                        $r++;
                        }
                    ?>
         </table>

         </div>
</div>
</div>
</div>

