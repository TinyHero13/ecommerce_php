<?php
session_start();
?>
<style>
input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}

input[type=search] {
	background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 9px 10px 9px 32px;
	width: 55px;
    height:10px;

	
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
  height:10px;
	width: 130px;
	background-color: #fff;
	border-color: #66CC75;
	
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
}

#demo-2 input[type=search] {
	width: 15px;
	padding-left: 10px;
	color: transparent;
	cursor: pointer;
}
#demo-2 input[type=search]:hover {
	background-color: #fff;
}
#demo-2 input[type=search]:focus {
	width: 80px;
	padding-left: 10px;
	color: #000;
	background-color: #fff;
	cursor: auto;
}
#demo-2 input:-moz-placeholder {
	color: transparent;
}
#demo-2 input::-webkit-input-placeholder {
	color: transparent;
}
</style>
<!---->
<body>
  <!--================Inicio header=================-->
  <header class="header_area">
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.php">
            <img src="../imagens/logo.png">
          </a>
         
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
              <div class="col-lg-7 pr-0">
           
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <a href="#" class="icons">
                    <form id="demo-2" method="post" action="../view/buscar.php">
                    <input type="search" name="pesquisar" placeholder="Pesquisar">
                    </form>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="../view/carrinho.php" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle icons" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"><img src="../imagens/login.png"></a>  &nbsp;
                      <?php if(isset($_SESSION['usuario'])): ?>                        
                       Boas vindas, <?php echo $_SESSION['usuario']; ?>
                      <?php endif;?>
                    <ul class="dropdown-menu">

                    <?php if(isset($_SESSION['usuario'])): ?>                     
                                
                      <li class="nav-item">
                        <a class="nav-link" href="../cadastro/logout.php">Sair</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../view/configuracao.php">Configurações</a>
                      </li> 
                

                      <?php else: ?>

                        <li class="nav-item">
                        <a class="nav-link" href="../cadastro/login.php">Entrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../cadastro/cadastro.php">Cadastrar</a>
                      </li>      

                      <?php endif; ?> 

                    </ul>
                  </li>      
           

                </ul>
              </div>
            </div>
        </nav>
      </div>
  </header>
  <!--================Fim do header=================-->
  <script>
  function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    var botao = document.getElementById("meuBotao");

    if(display == "none") {
        document.getElementById(el).style.display = 'block';
        botao.innerHTML = "Esconder";
    }
    else {
        document.getElementById(el).style.display = 'none';
        botao.innerHTML = "Mostrar";
    }
}
</script>
