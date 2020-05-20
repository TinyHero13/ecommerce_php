
      <?php
    include('../funcoes/funcoes.php');
    
    $var = "secao_";
    $var .= basename($_SERVER['PHP_SELF']);
   
    echo template_adm($var);
?>