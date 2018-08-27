<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Guapa</title>
    <!--Import Google Icon Font-->
    
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <!--Import materialize.css-->
    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="icon" href="img/logo2.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
	<?php include('include/menu.php'); ?>
      <br>
      <h4 id="cabeca" class='col s6 black-text center'>Cadastro de Clientes</h4>
      <br>
      <br>
    
    
    
    <div class="container row">
	  	<h5 id="cabeca" class='left col s12 black-text'>Dados Pessoais<i class="fas fa-user fa-me left"></i></h5>
		<br>
		<br>
        <!--Mude aqui o action-->
        <form class="col s12" action="index.html" method="post">
		<div class="row">
          <div class="input-field col s12 m12 l12">
            <input type="text" class="validate" id="nome" name="" value="" data-error="Por favor, informe o nome">
            <label for="nome">Nome</label>
          </div>
		  <div class="input-field col s12 m6 l6">
            <input type="text" class="validate" id="mae" name="mae" value="" data-error="Por favor, informe o nome da Mãe">
            <label for="mae">Nome da Mãe</label>
          </div>
		  <div class="input-field col s12 m6 l6">
            <input type="text" class="validate" id="pai" name="pai" value="" data-error="Por favor, informe o nome do Pai">
            <label for="pai">Nome do Pai</label>
          </div>
		  <div class="input-field col s12 m6 l3">
            <input type="text" class="datepicker" id="dataPesquisa">
            <label for="nascimento">Data de Nasc.</label>
          </div>
		  <div class="input-field col s12 m6 l3">
            <input type="text" class="validate cpf" id="cpf" name="" value="" data-error="CPF">
            <label for="cpf">CPF</label>
          </div>
		</div>
		<h5 id="cabeca" class='left col s12 m12 l12 black-text'>Dados de contato<i class="fas fa-clipboard-list fa-me left"></i></h5>
		<div class="row">
          <div class="input-field col s12 m6 l6">
            <input type="text" class="validate" id="endereco" name="" value="" data-error="Informe o endereço">
            <label for="endereco">Endereço</label>
          </div>
          <div class="input-field col s4 m2 l1">
            <input type="number" class="validate" id="numero" name="" value="" data-error="Nº">
            <label for="numero">Nº</label>
          </div>

          <div class="input-field col s8 m4 l3">
            <input type="text" class="validate" id="bairro" name="" value="" data-error="Informe o bairro">
            <label for="bairro">Bairro</label>
          </div>
		  <div class="input-field col s12 m6 l2">
            <input type="text" class="validate" id="cidade" name="" value="" data-error="Informe a cidade">
            <label for="cidade">Cidade</label>
          </div>
          <div class="input-field col s12 m6 l3">
            <input type="text" class="validate tel" id="telefone1" name="" value="" data-error="Telefone_1">
            <label for="telefone1">Telefone 1</label>
          </div>
          <div class="input-field col s12 m6 l3">
            <input type="text" class="validate tel" id="telefone2" name="" value="" data-error="Telefone_2">
            <label for="telefone2">Telefone 2</label>
          </div>
		  <div class="input-field col s12 m6 l6">
            <input type="email" class="validate" id="email" name="email" value="" data-error="E-mail">
            <label for="email">E-mail</label>
          </div>
		</div>
			<br>
			<br>
			<div class="input-field col s12 m4 l4 pull-l1 pull-m1 center-align">
            <button class="btn waves-effect waves-light red lighten-2" type="button" onclick="history.go(-1);" name="action">
              Voltar <i class="fas fa-chevron-left fa-me left"></i>
            </button>
			</div>
			<div class="input-field col s12 m4 l4 push-l5 push-m5 center-align">
			<button class="btn waves-effect waves-light red lighten-2" type="submit" name="action">
              Salvar <i class="fas fa-save fa-me right"></i>
            </button>
			</div>
        </form>
				</div>
	<br>
	<br>
	<br>
   <?php  include('include/rodape.php'); ?>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
