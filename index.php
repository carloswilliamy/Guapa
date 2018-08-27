<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <title>Guapa</title>
    <!--Import Google Icon Font-->
    
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <!--Import materialize.css-->
    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/logo2.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
<body onload="$('#usuario').select();">
    <br><br><img class='responsive-img col s12 m6 l2' width="150" src="img/logo.png">
    <div class="container">
    <form name="login" class="col s12" action="DAO.php" method="POST">
      <div class="row col s12 m2 l2">
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
      <button class="btn waves-effect waves-light red lighten-2 right col s12 m6 l2" type="submit" name="action" onclick="return loginTemp()">Entrar
        <i class="material-icons right">send</i>
      </button>
      <a class='waves-effect waves-teal btn-flat left col s12 m6 l2' href="cadastro.php">Esqueceu sua senha?</a>
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
   <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
