<?php
 include('verifica_login_adm.php');
 require("../funcoes/conexao.php");
 

    $tabela = "produtos";
    $campo = "nome";
    $onde = "";
    $ordem = "ORDER BY $campo ASC";

  

    $sql = "SELECT * FROM $tabela $ordem";
    $resultado1 = mysqli_query($conexao, $sql);

    $tabela2 = "usuarios";
    $campo2 = "nome";
    $onde2 = "";
    $ordem2 = "ORDER BY $campo2 ASC";



    $sql2 = "SELECT * FROM $tabela2 $ordem2";
    $resultado2 = mysqli_query($conexao, $sql2);
?>

   
  <div id="content-wrapper">
  <div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="../acesso_adm/restrito.php">Ínicio</a>
    </li>
    <li class="breadcrumb-item active">Tabelas</li>
  </ol>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Produtos    
        <a href="../acesso_adm/inserir.php" class="link">
        <img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/>
        Novo produto
        </a>
</div>
    <div class="card-body">

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Imagem</th>
              <th>Categoria</th>
              <th>Estoque</th>
              <th>Funções</th>
            </tr>          
            </tr>
            <?php
              $i = 0;
              while($row = mysqli_fetch_array($resultado1)) {
            ?>
            <tr class="<?php if(isset($classname)) echo $classname;?>">
              <td><?php echo $row["idproduto"]; ?></td>
              <td><?php echo $row["nome"]; ?></td>
              <td><?php echo $row["preco"]; ?></td>
              <td><?php echo $row["img"]; ?></td>
              <td><?php echo $row["categoria"]; ?></td>
              <td><?php echo $row["estoque"]; ?></td>
              <td><a href="editar.php?idproduto=<?php echo $row["idproduto"]; ?>" class="link">
                    <img alt="Edit" title="Edit" src="images/edit.png" width="15px" height="15px" hspace="10" />
                  </a>
                  <a href="deletar_produto.php?idproduto=<?php echo $row["idproduto"]; ?>"  class="link">
                    <img alt="Delete" title="Delete" src="images/delete.png" width="15px" height="15px" hspace="10" />
                  </a>
                </td>
              </tr>
                <?php
                  $i++;
                  }
                ?>
         </table>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Clientes    
          </div>
      
            <div class="card-body">

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>E-mail</th>
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
                        while($row2 = mysqli_fetch_array($resultado2)) {

                          $datePOST = new DateTime($row2["data_nasc"]); 
                    ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                    <td><?php echo $row2["idusuario"]; ?></td>

                    <td><?php echo $row2["nome"]; ?></td>
                    <td><?php echo $row2["email"]; ?></td>
                    <td><?php echo $row2["usuario"]; ?></td>                    
                    <td><?php echo $row2["cpf"]; ?></td>                  
                    <td><?php echo $row2["telefone"]; ?></td>                   
                    <td><?php echo $row2["sexo"]; ?></td>
                    <td><?php echo $datePOST->format('d/m/Y');?></td> 
                    <td>
                        <a href="deletar.php?idusuario=<?php echo $row2["idusuario"]; ?>"  class="link">
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
</div>
</div>

