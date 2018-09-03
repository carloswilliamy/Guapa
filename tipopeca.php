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
  <div id="modal2" class="modal">
		<div class="modal-content">
      <div class="row">
        <div class="col s12 m12 l12 left">
		<br>
		      <h5 class="text center-align">Pesquisar tipo de peça</h5>
      </div>
    </div>
		  
		<div class="row">
			<div class="input-field col s12 m12 l12">
                <input type="text" class="section scrollspy" id="tipoPeca" name="tipoPeca" value="" data-error="Desconto">
                <label for="tipoPeca">Nome do tipo</label>
          </div> 
		</div>
		
		</div>
		<div class="result col l10">
      
		</div>
		<br>
  		<div class="modal-footer">
  		  <a class="btn waves-effect waves-light red lighten-2" onclick="buscarTipoPeca();">Buscar<i class="fas fa-search fa-sm left"></i></a>
  		</div>
	  </div>
	  <div id="modal3" class="modal">
		<div class="modal-content">
		<div class="row">
			<div class="input-field col s12 m12 l12">
                <h5 class="text center-align">Tem certeza que deseja excluir o item?</h5>
          </div> 
		</div>
		
		</div>

		<br>
  		<div class="modal-footer">
  		  <a class="btn waves-effect waves-light red lighten-2 modal-close" >Não<i class="fas fa-times fa-sm left"></i></a>
  		  <a class="btn waves-effect waves-light green lighten-2 modal-close" onclick="excluirPeca();">Sim<i class="fas fa-check fa-sm right"></i></a>
  		</div>
	  </div>
  <?php include('include/menu.php'); ?>
  <br>
    <div class="container row">
      <h4 id="cabeca" class='col s12 m12 l12 center '>Cadastro de tipos de peças</h4>
    </div>
    <br>
    <br>
    
    
    
    <div class="container row">
		<div class="input-field col s12 m12 l12">
		<h4 class="left col s12 l4 black-text flow-text">Tipo de peça<i class="fas fa-tshirt fa-sm left"></i></h4>
		<button class="btn waves-effect waves-light red lighten-2 modal-trigger right s12 m6 l12" onclick="limparTipoPeca();" href="#modal2" type="button"  name="action">
		  Buscar <i class="fas fa-search fa-sm left"></i>
		</button>
		</div>
		<br>
		<br>
        <!--Mude aqui o action-->
        <form class="col s12 m12 l12 left" action="index.html" method="post">
		<div class="row">
		<div class="input-field col s12 m12 l12">
            <input type="hidden" id="idTipo" name="idTipo" value="">
            <input type="text" class="validate" id="nomePeca" name="nomePeca" value="" data-error="Por favor, informe o nome da Peça">
            <label for="nomePeca">Nome do tipo</label>
          </div>
        
			<br>
			<br>
			<br>
			<br><br>
			<br>
			<br>
			<br>
      <div class="row">
        <div class="input-field col s6 m4 l4 pull-l1 pull-m1 center-align">
            <button class="btn waves-effect waves-light red lighten-2" type="button" onclick="history.go(-1);" name="action">
                Voltar <i class="fas fa-chevron-left fa-sm left"></i>
            </button>
  			</div>
  			<div class="input-field col s6 m4 l4 push-l5 push-m5 center-align" id="salvarTipoA">
  			    <button class="btn waves-effect waves-light red lighten-2" id="salvarTipo" type="button" onclick="validarTipo();" name="action">
                Salvar <i class="fas fa-save fa-sm right"></i>
            </button>
  			</div>
      </div>
      </form>
			</div>
			</div>
	
    
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
