<head>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <style type="text/css">
      #arrow{
        margin-left:14px!important;
      }
    </style>
</head>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!" class="red-text lighten-2">Financeiro</a></li>
  <li><a href="#!" class="red-text lighten-2">Aniversariantes</a></li>
</ul>
<nav class="red lighten-2">
    <div class="nav-wrapper">
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars fa-lg"></i></a>
      <ul class="right hide-on-med-and-down hide-on-med-only">
        <li><a href="administrativo.php"><i class="fas fa-home fa-lg"></i> Início</a></li>
        <li><a href="entrada.php"><i class="fas fa-file-import fa-lg"></i> Entrada</a></li>
        <li><a href="saida.php"><i class="fas fa-hand-holding-usd fa-lg"></i> Saída</a></li>
        <li><a href="cadastroCliente.php"><i class="fas fa-user fa-lg"></i> Clientes</a></li>
        <li style="outline: none;"><a class="dropdown-trigger" style="outline: none;" href="#!" data-target="dropdown1"><i class="fas fa-file-alt fa-lg left"></i> Relatórios<i class="fas fa-sort-down fa-sm right"></i></a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg right"></i> Sair</a></li>
      </ul>
    </div>
  </nav>

  <ul id="slide-out" class="sidenav">
      <br>
      <div class="row col s12 center-align">
        <img class="responsive-img" width="100" src="img/logo.png">
      </div>
      <li><a href="administrativo.php"><i class="fas fa-home fa-lg"></i>Início</a></li>
      <li><a href="entrada.php"><i class="fas fa-file-import fa-lg"></i>Entrada</a></li>
      <li><a href="saida.php"><i class="fas fa-hand-holding-usd fa-lg"></i>Saída</a></li>
      <li><a href="cadastroCliente.php"><i class="fas fa-user fa-lg"></i>Clientes</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion" style="outline: none;">
          <li style="outline: none;">
            <a class="collapsible-header" style="outline: none;" id="arrow"><i class="fas fa-file-alt fa-lg left"></i>Relatórios<i class="fas fa-sort-down fa-sm right"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!" class="red-text lighten-2">Financeiro</a></li>
                <li><a href="#!" class="red-text lighten-2">Aniversariantes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="cadastroCliente.php"><i class="fas fa-sign-out-alt fa-lg"></i>Sair</a></li>
    </ul>