<!DOCTYPE html>
<html lang="br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Guapa</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" href="img/logo2.png">
</head>
<body onload="$('#usuario').select();">
    <br><br><img id="logo2" class='center responsive-img' width="150" src="img/logo.png">
    <div class="container col s4 m2 l2">
    <form name="login" class="col s12" action="DAO.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">person_outline</i>
          <input id="icon_prefix" type="text" name="usuario"class="validate">
          <label for="icon_prefix">Nome de usuário</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="icon_prefix2" type="password" name="senha" class="validate">
          <label for="icon_prefix2">Senha</label>
        </div>
      </div>
      <button class="red right btn waves-effect waves-light" type="submit" name="action" onclick="return loginTemp()">Entrar
        <i class="material-icons right">send</i>
      </button>
      <a id="C2" class='azulColor'href="cadastro.php">Esqueceu sua senha?</a>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php	include('include/rodape.php'); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>
