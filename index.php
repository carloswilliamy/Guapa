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
	<div class="container col l12 center-align">
	  	<div class="center-align"><img class='responsive-img' width="150" src="img/logo.png"></div>
		<br>
		<br>
        <!--Mude aqui o action-->
			<form action="index.html" method="post">
				<div class="row center">
					<div class="input-field col l6">
						<input type="text" class="validate" id="usuario" name="usuario" value="" data-error="Por favor, informe o nome de usuário">
						<label for="usuario">Nome de usuário</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l6">
						<input type="text" class="validate" id="senha" name="senha" value="" data-error="Por favor, informe a senha">
						<label for="senha">Senha</label>
					</div>
				<br>
				<br>
				</div>
				<div class="row col l6">
					<button class="btn-flat left" type="button" onclick="" name="action">
					  Esqueceu sua senha?
					</button>
					<button class="btn waves-effect waves-light red lighten-2 right" type="submit" name="action">
					  Entrar <i class="material-icons right">send</i>
					</button>
				</div>
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
