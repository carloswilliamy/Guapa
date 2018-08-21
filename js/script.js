document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
	var elems = document.querySelectorAll('select');
	var elems = document.querySelectorAll('.sidenav');
    var elems = document.querySelectorAll('.modal');
    //var instances = M.Collapsible.init(elems, options);
  });
  

function validar(){
	var nomeP = $("#nomeP").val();
	var dtNasc = $("#dtNasc").val();
	var sexo = $("#sexo").val();
	var cns = $("#cns").val();
    if (verificarVazio(nomeP) || verificarVazio(dtNasc) || verificarVazio(sexo) || verificarVazio(cns)){
        alert("Preencha todos os campos!");
		return false;
    }else if(fuValidaCNS(cns)){
		$('#cadastro').submit();
	}else{
		alert('CNS inválido');
	}
	
}
var idM = 0;
var cont2 = 0;
function carregarM(a){
	$.ajax({
            url:'search.php',
            type:'post',
            data: {idM : a},
            success: function (data){
				result = data.split(';');
				$('#nomeMedico').val(result[0]);
				$('#nomeMedico').focus();
				$('#especialidade').val(result[1]);
				$('#especialidade').focus();
				$('#numConselho').val(result[2]);
				$('#numConselho').focus();
				$('#uf').val(result[3]);
				$('#uf').focus();
				$('#sit option[value="' + result[4] + '"]').attr({ selected : "selected" });
				$('select').formSelect();
				idM = result[5];
				$('#actionCad').remove();
				if(cont2==0){
					$('#op').append("<button class='green right btn waves-effect waves-light block' type='button' id='actionUpd' name='action' onclick='validar4("+idM+")'>Atualizar<i class='material-icons right'>update</i></button>");
					$('#op').append("<br><br><br><a class='waves-effect right waves-light btn modal-trigger' href='#modal2'>Excluir<i class='material-icons right'>delete</i></a>");
					cont2 = 1;
				}
				$('#nomeMedico').focus();
            }
        });
}
function verificarVazio(campo){
	if (campo == "" || campo == null){
		return true;
	}
	return false;
}

$(document).ready(function(){
    $('.modal').modal();
	$('input#input_text, textarea#textarea2').characterCounter();
	$('select').formSelect();
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.collapsible').collapsible();
   $(document).on("focus", ".tel", function(){
      $.mask.definitions['~']='[+-]';
	//Inicio Mascara Telefone
	$('.tel').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');
   });
   $(document).on("focus", ".cpf", function(){
   $.mask.definitions['~']='[+-]';
	//Inicio Mascara CNPJ
	$('.cpf').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("999.999.999-99");
		} else {
			element.mask("999.999.999-99");
		}
	}).trigger('focusout');
   });
   $(document).on("focus", ".cnpj", function(){
		$.mask.definitions['~']='[+-]';
	//Inicio Mascara CNPJ
	$('.cnpj').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("99.999.999/9999-99");
		} else {
			element.mask("99.999.999/9999-99");
		}
	}).trigger('focusout');
   });
});

