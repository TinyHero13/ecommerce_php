<?php
include('verifica_login_adm.php');
?>
  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="../acesso_adm/restrito.php">Início</a>
          </li>
          <li class="breadcrumb-item active">Geral</li>
        </ol>

      <h1>Boas vindas novamente, <?php echo $_SESSION['adm']; ?>  </h1>
