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

    <div class="row col s6 m3 l2 left-align">
        <a class="waves-effect waves-light btn-small transparent right black-text card-panel teal" href="logout.php" id="sair"><i class="material-icons right"> logout</i>Sair</a>
    </div>
    
    <div class="container row center-align">
      <div class="col s12 m12 l12">  
        <!--!<h1 id="titulo" class="center-align">Painel</h1>-->
          <img class="responsive-img" width="300" src="img/logo.png"> 
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>

  	<div class="row center-align bg-gradient">
       <!--<a class="waves-effect waves-light btn-large red col s10 m8 l2 push-l2 z-depth-3" href="entrada.php"><i class="material-icons right medium">archive</i>Entrada</a>
       <a class="waves-effect waves-light btn-large col s10 m8 l2 push-l3" href="saida.php"><i class="material-icons right medium">unarchive</i>Saída</a>
  	   <a class="waves-effect waves-light btn-large green col s10 m8 l2 push-l4"><i class="material-icons right medium">insert_drive_file</i>Relatórios</a>-->

        <div class="servico bg-white radius bg-gradient">
               <a href="#"><img src="img/enter.png" alt="Campanhas publicitárias"></a>  
        </div>
    

    </div>
    
   
      
   <?php include('include/rodape.php');?>
    


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>