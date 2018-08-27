<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <title>Guapa</title>
    <!--Import Google Icon Font-->
    
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <!--Import materialize.css-->
    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="icon" href="img/logo2.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
<body onload="$('#usuario').select();">
	<div class="container row center-align">
	<br>
		<br><br>
		<br>
	  	<img class='responsive-img' width="150" src="img/logo.png">
		<br>
		<br>
        <!--Mude aqui o action-->
			<form action="DAO.php" method="post">
				<div class="row">
					<div class="input-field col s12 m8 l6 push-m2 push-l3">
						<input type="text" class="validate" id="usuario" name="usuario" value="" data-error="Por favor, informe o nome de usuário">
						<label for="usuario">Nome de usuário</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m8 l6 push-m2 push-l3">
						<input type="password" class="validate" id="senha" name="senha" value="" data-error="Por favor, informe a senha">
						<label for="senha">Senha</label>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="input-field col s12 m6 l4 push-m1 push-l2 left">
						<button class="btn-flat center s12 m12 l12" type="button" onclick="" name="action">
						  Esqueceu sua senha?
						</button>
					</div>
					<div class="input-field col s12 m5 l4 pull-m1 pull-l2 right">		
						<button class="btn waves-effect waves-light red lighten-2 center s12 m12 l12" type="submit" name="action">
						  Entrar <i class="fas fa-sign-in-alt fa-lg"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
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
