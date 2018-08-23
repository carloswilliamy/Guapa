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
    .rodape {
        position:absolute;
        bottom:0;
        width:100%;
    }

  </style>

</head>
<body>


    <div class="row col s6 m3 l2">
        <a class="waves-effect waves-light btn-large transparent right black-text card-panel teal font" href="logout.php" id="sair"><i class="material-icons right"> logout</i>SAIR</a>
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

  	<div class="row center-align">
       <!--<a class="waves-effect waves-light btn-large red col s10 m8 l2 push-l2 z-depth-3 caixa" href="entrada.php"><i class="material-icons right medium">archive</i>Entrada</a>
       <a class="waves-effect waves-light btn-large col s10 m8 l2 push-l3" href="saida.php"><i class="material-icons right medium">unarchive</i>Saída</a>
  	   <a class="waves-effect waves-light btn-large green col s10 m8 l2 push-l4"><i class="material-icons right medium">insert_drive_file</i>Relatórios</a>-->
       <a href="#">
            <div class="radius caixa red lighten-2 col s2 m2 l2 push-l2 push-m2 push-s2 z-depth-3">
                  <!--<p class="top">ENTRADA</p>-->
                  <img class="responsive-img top" width="50" src="img/enter.png">
                  <p class="font flow-text hide-on-med-only hide-on-med-and-down">ENTRADA</p> 
            </div>
      </a>
       <a href="#">
            <div class="radius caixa red lighten-2 col s2 m2 l2 push-l3 push-m3 push-s3 z-depth-3">
                  <!--<p class="top">ENTRADA</p>-->
                  <img class="responsive-img top" width="50" src="img/exit.png">
                  <p class="font flow-text hide-on-med-only hide-on-med-and-down">SAÍDA</p> 
            </div>
      </a>
      <a href="#">
            <div class="radius caixa red lighten-2 col s2 m2 l2 push-l4 push-m4 push-s4 z-depth-3">
                  <!--<p class="top">ENTRADA</p>-->
                  <img class="responsive-img top" width="50" src="img/rel.png">
                  <p class="font flow-text hide-on-med-only hide-on-med-and-down">RELATÓRIO</p> 
            </div>
      </a>
      
    </div>
    
   
   <div class="rodape">   
    <?php include('include/rodape.php');?>
   </div>
    


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>