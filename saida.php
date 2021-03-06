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
  <h4 id="cabeca" class='col s6 black-text center'>Saída de peça (s)</h4>
  <br>
  <br>
    
    
    
    <div class="container row">
	  	<h5 id="cabeca" class='left col s12 m6 l6 black-text'>Pesquisar cliente<i class="fas fa-users fa-sm left"></i></h5>
		<div class="input-field col s12 m6 l6 push-l4 push-m3 right">
            <button class="btn waves-effect waves-light red lighten-2 modal-trigger" href="#modal1" type="button"  name="action">
              Buscar <i class="fas fa-search fa-sm left"></i>
            </button>
			</div>
		<br>
		<br>
        <!--Mude aqui o action-->
        <form class="col s12" action="index.html" method="post">
		<div class="row">
          <div class="input-field col s12 m12 l12">
            <input type="text" class="validate" id="nome" name="" value="" data-error="Por favor, informe o nome" readonly disabled>
            <label for="nome">Nome</label>
          </div>
		  <div class="input-field col s12 m6 l2">
            <input type="date" class="section scrollspy" id="nascimento" name="" value="" data-error="Data nascimento" readonly disabled>
            <label for="nascimento">Data de Nasc.</label>
          </div>
		  <div class="input-field col s12 m6 l3">
            <input type="text" class="validate cpf" id="cpf" name="" value="" data-error="CPF" readonly disabled>
            <label for="cpf">CPF</label>
          </div>
		  <div class="input-field col s12 m6 l3">
            <input type="text" class="validate tel" id="telefone1" name="" value="" data-error="Telefone_1" readonly disabled>
            <label for="telefone1">Telefone 1</label>
          </div>
		  <div class="input-field col s12 m6 l4">
            <input type="email" class="validate" id="email" name="email" value="" data-error="E-mail" readonly disabled>
            <label for="email">E-mail</label>
          </div>
		</div>
		<h5 id="cabeca" class='left col s12 m6 l6 black-text'>Pesquisar peça (s)<i class="fas fa-search fa-sm left"></i></h5>
		<div class="input-field col s12 m6 l6 push-l4 push-m3 right">
            <button class="btn waves-effect waves-light red lighten-2 modal-trigger" href="#modal2"" type="button" name="action">
              Buscar <i class="fas fa-search fa-sm left"></i>
            </button>
			</div>
			<h6 id="cabeca" class='left col s12 m6 l6 black-text'>Carrinho de compras<i class="fas fa-shopping-cart fa-me left"></i></h6>
		<div class="row">
			<div class="input-field col s12 m12 l12">
			<ul class="collapsible">
			<li>
			  <div class="collapsible-header"><i class="fas fa-tshirt fa-sm left"></i>Camiseta Masculina Skyler <span class="badge">Total: R$ 50,00</span></div>
			  <div class="collapsible-body"><span><b>Item:</b> Camiseta Masculina Skyler<br><b>Descrição:</b> Camiseta Masculina de cor preta, tamanho M<br><b>Valor unitário:</b> R$ 25,00<br><b>Desconto:</b> R$ 0,00<br><b>Quantidade:</b> 2<br><b>Total:</b> R$ 50,00</span>
			  <button class="btn-flat right" type="button" name="action">
              Remover <i class="fas fa-trash-alt fa-sm left"></i>
            </button>
			  </div>
			</li>
			<li>
			  <div class="collapsible-header"><i class="fas fa-tshirt fa-sm left"></i>Camiseta Feminina Polo <span class="badge">Total: R$ 30,00</span></div>
			  <div class="collapsible-body"><span><b>Item:</b> Camiseta Masculina Skyler<br><b>Descrição:</b> Camiseta Feminia de cor Branca, tamanho P<br><b>Valor unitário:</b> R$ 30,00<br><b>Desconto:</b> R$ 0,00<br><b>Quantidade:</b> 1<br><b>Total:</b> R$ 30,00</span>
			    <button class="btn-flat right" type="button" name="action">
              Remover <i class="fas fa-trash-alt fa-sm left"></i>
            </button></div>
			</li>
			</ul>
			<h6>Total da compra: R$ 80,00</h6>
		</div>
		</div>
	
			<br>
			<br>
            <div class="input-field col s12 m4 l4 pull-l1 pull-m1 center-align">
            <button class="btn waves-effect waves-light red lighten-2" type="button" onclick="history.go(-1);" name="action">
              Voltar <i class="fas fa-chevron-left fa-sm left"></i>
            </button>
			</div>
			<div class="input-field col s12 m4 l5 push-l4 push-m4 center-align">
			<button class="btn waves-effect waves-light red lighten-2" type="submit" name="action">
              Finalizar compra <i class="fas fa-dollar-sign fa-sm right"></i>
            </button>
			</div>
        </form>
				</div>
	<br>
	<br>
	<br>
	 <div id="modal1" class="modal">
		<div class="modal-content">
		  <h4>Pesquisar clientes</h4>
		  <p>
			<div class="row">
          <div class="input-field col s12 m12 l8">
            <input type="text" class="validate" id="cliente" name="cliente" value="" data-error="Por favor, informe o nome">
            <label for="cliente">Nome</label>
          </div>
          <div class="input-field col s12 m6 l4">
            <input type="text" class="validate cpf" id="cpf" name="cpf" value="" data-error="CPF">
            <label for="cpf">CPF</label>
          </div>
		  <div class="input-field col s12 m6 l6">
            <input type="text" class="validate" id="mae" name="mae" value="" data-error="Por favor, informe o nome da Mãe">
            <label for="mae">Nome da mãe</label>
          </div>
		  <div class="input-field col s12 m6 l6">
            <input type="text" class="validate" id="pai" name="pai" value="" data-error="Por favor, informe o nome do Pai">
            <label for="pai">Nome do pai</label>
          </div>
		  <div class="input-field col s12 m6 l3">
            <input type="date" class="section scrollspy" id="nascimento" name="" value="" data-error="Data nascimento">
            <label for="nascimento">Data de Nasc.</label>
          </div>
		</div>
		  </p>
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-close btn waves-effect waves-light red lighten-2">Buscar <i class="fas fa-search fa-sm left"></i></a>
		</div>
	  </div>
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
                <input type="text" class="section scrollspy" id="fabricante" name="" value="" data-error="Fabricante">
                <label for="fabricante">Fabricante</label>
          </div>
    		<div class="input-field col s12 m12 l12">
                <input type="text" class="validate" id="peca" name="peca" value="" data-error="Por favor, informe o nome da Mãe">
                <label for="peca">Nome da peça</label>
              </div>
    		  <div class="input-field col s12 m6 l6">
    				<select>
    				  <option value="" disabled selected>Escolha o tipo</option>
    				</select>
    				<label>Tipo de Peça</label>
              </div>
    		  <div class="input-field col s12 m6 l6">
                <input type="text" class="validate" id="cor" name="cor" value="" data-error="Por favor, informe o nome do Pai">
                <label for="cor">Cor predominante</label>
			</div>
		</div>
      
      

		</div>
  		<div class="modal-footer">
  		  <a href="#!" class="modal-close btn waves-effect waves-light red lighten-2">Buscar<i class="fas fa-search fa-sm left"></i></a>
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
