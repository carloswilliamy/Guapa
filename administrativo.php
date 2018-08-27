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
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <div class="row">
        <div class="col s12 m6 l4">
          <div class="card red darken-1 z-depth-5">
            <div class="card-content white-text">
              <span class="card-title"><b>Aniversariantes do dia</b></span>
              <p>Hoje é o aniversário de Karlos Oliveira. Envie uma mensagem para ele(a).</p>
            </div>
            <div class="right z-depth-5">
               <button class="btn waves-effect waves-light red darken-1" type="button" onclick="" name="action">
              Próximo <i class="fas fa-chevron-right fa-lg right"></i>
            </button>
            </div>
          </div>
        </div>
      </div>
        
      


      <?php include('include/rodape.php');?>
    

    

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>