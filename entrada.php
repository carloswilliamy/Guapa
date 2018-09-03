<?php
	include('conexao.php');
?>
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
		      <h4 class="text center-align">Pesquisar peças</h4>
      </div>
    </div>
		  
			<div class="row">
			<div class="input-field col s12 m6 l6">
                <input type="text" class="section scrollspy" id="cod" name="cod" value="" data-error="Desconto">
                <label for="cod">Código de barras</label>
          </div> 
		  <div class="input-field col s12 m6 l6">
                <input type="text" class="section scrollspy" id="fabricante2" name="fabricante2" value="" data-error="Fabricante">
                <label for="fabricante2">Fabricante</label>
          </div>
    		<div class="input-field col s12 m12 l12">
                <input type="text" class="validate" id="peca2" name="peca2" value="" data-error="Por favor, informe o nome da Mãe">
                <label for="peca2">Nome da peça</label>
              </div>
    		  <div class="input-field col s12 m6 l6">
    				<select name="tipoPeca2" id="tipoPeca2">
    				  <option value="" disabled selected>Escolha o tipo</option>
    				</select>
    				<label for="tipoPeca2">Tipo de Peça</label>
              </div>
    		  <div class="input-field col s12 m6 l6">
                <input type="text" class="validate" id="cor2" name="cor2" value="" data-error="Por favor, informe o nome do Pai">
                <label for="cor2">Cor predominante</label>
			</div>
		</div>
      
      

		</div>
  		<div class="modal-footer">
  		  <a href="#!" class="modal-close btn waves-effect waves-light red lighten-2">Buscar<i class="fas fa-search fa-sm left"></i></a>
  		</div>
	  </div>
  <?php include('include/menu.php'); ?>
  <br>
    <div class="container row">
      <h4 id="cabeca" class='col s12 m12 l12 center '>Cadastro de peças</h4>
    </div>
    <br>
    <br>
    
    
    
    <div class="container row">
		<div class="input-field col s12 m12 l12">
		<h4 class="left col s12 l4 black-text flow-text">Dados sobre a peça<i class="fas fa-tshirt fa-sm left"></i></h4>
		<button class="btn waves-effect waves-light red lighten-2 modal-trigger right s12 m6 l12" href="#modal2" type="button"  name="action">
		  Buscar <i class="fas fa-search fa-sm left"></i>
		</button>
		</div>
		<br>
		<br>
        <!--Mude aqui o action-->
        <form class="col s12 m12 l12 left" action="index.html" method="post">
		<div class="row">
		<div class="input-field col s12 m12 l12">
			<input type="hidden" id="idPeca" name="idPeca" value="">
            <input type="text" class="validate" id="nomePeca" name="nomePeca" value="" data-error="Por favor, informe o nome da Peça">
            <label for="nomePeca">Nome da peça</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <textarea id="textarea2" name="descPeca"class="materialize-textarea" data-length="500" data-error="Por favor, informe a descrição da Peça"></textarea>
            <label for="textarea2">Descrição da peça</label>
          </div>
		  <div class="input-field col s12 m4 l4">
				<select name="tipoPeca" id="tipoPeca" data-error="Por favor, informe o tipo da Peça">
					<option value="" disabled selected>Escolha o tipo</option>
					<?php
						$qryLista = mysqli_query($mysqli, "SELECT tipopeca.id, tipopeca.nome FROM tipoPeca");
						$sql = "SELECT tipopeca.id, tipopeca.nome FROM tipoPeca" or die("Erro ao selecionar");
						$query = $mysqli->query($sql);
						$row = $query->num_rows;
						if($row>0){
							while($ress = mysqli_fetch_array($qryLista)){
								echo "<option value='$ress[0]'>$ress[1]</option>'";
							}
						}
					?>
				</select>
				<label for="tipoPeca">Tipo de Peça</label>
          </div>
		  <div class="input-field col s12 m4 l4">
            <input type="text" class="validate" id="cor" name="cor" value="" data-error="Por favor, informe a cor predominante da Peça">
            <label for="cor">Cor predominante</label>
          </div>
		  <div class="input-field col s12 m4 l4">
            <input type="text" class="section scrollspy" id="fabricante" name="fabricante" value="" data-error="Por favor, informe o fabricante da Peça">
            <label for="fabricante">Fabricante</label>
          </div>
		</div>
		<h4 id="cabeca" class='left col s12 m12 l12 black-text flow-text'>Dados financeiros <i class="fas fa-dollar-sign fa-sm left"></i></h4>
		<div class="row">
          <div class="input-field col s12 m4 l4">
            <input type="text" class="validate" onKeyPress="return(MascaraMoeda(this,'.',',',event))" id="compra" name="compra" value="0,00" data-error="Por favor, informe o valor de compra">
            <label for="compra">Valor de compra</label>
          </div>
          <div class="input-field col s12 m4 l4">
            <input type="text" class="validate" onKeyPress="return(MascaraMoeda(this,'.',',',event))" id="revenda" name="revenda" value="0,00" data-error="Por favor, informe o valor de revenda">
            <label for="revenda">Valor de revenda</label>
          </div>

          <div class="input-field col s12 m4 l4">
            <input type="number" class="validate" id="qtde" name="qtde" value="1" data-error="Por favor, informe a quantidades de Peças">
            <label for="qtde">Quantidade</label>
          </div>
		</div>
			<br>
			<br>
      <div class="row">
        <div class="input-field col s6 m4 l4 pull-l1 pull-m1 center-align">
            <button class="btn waves-effect waves-light red lighten-2" type="button" onclick="history.go(-1);" name="action">
                Voltar <i class="fas fa-chevron-left fa-sm left"></i>
            </button>
  			</div>
  			<div class="input-field col s6 m4 l4 push-l5 push-m5 center-align">
  			    <button class="btn waves-effect waves-light red lighten-2" type="button" onclick="validar();" name="action">
                Salvar <i class="fas fa-save fa-sm right"></i>
            </button>
  			</div>
      </div>
      </form>
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
