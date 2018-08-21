<?php
	include('classes/CRUD.class.php');
	include("conexao.php");
	$CRUD = new CRUD;
	$CRUD->verificarNivel(1);
?>
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
<body>
<a class="waves-effect waves-light btn-small transparent right black-text" href="logout.php" id="sair"><i class="material-icons right">logout</i>Sair</a>
<h1 id="titulo" class="center">Painel</h1>
	<div class="row center">
     <a class="waves-effect waves-light btn-large col s2 push-s2"><i class="material-icons right medium">archive</i>Entrada</a>
     <a class="waves-effect waves-light btn-large col s2 push-s3"><i class="material-icons right medium">unarchive</i>Saída</a>
	 <a class="waves-effect waves-light btn-large col s2 push-s4"><i class="material-icons right medium">insert_drive_file</i>Relatórios</a>

    </div>

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>
  </body>
</html>