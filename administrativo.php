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
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="icon" href="img/logo2.png">
  <style type="text/css">
    .pe{
       position:absolute;
    bottom:0;
    width:100%;
    }
  </style>
</head>
<body>
	<?php include('include/menu.php'); ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
  <div class="row col s12 center-align">
        <img class="responsive-img" width="600" style="opacity: 0.1" src="img/logo.png">
      </div>
      </div>
    
    <div class="pe" ">
      <?php include('include/rodape.php');?>
    </div>
    

    

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>