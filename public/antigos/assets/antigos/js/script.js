$(function(){
	$("input[type=text], textarea").blur(function(){
		val = $(this).val().toUpperCase()

		$(this).val(val)
	});

	$(".valor").maskMoney({prefix:'R$ ', 
						   allowNegative: true, 
						   thousands:'.', 
						   decimal:',', 
						   affixesStay: false
						});
    $('.data').mask('99/99/9999');
    $('.cpf').mask('999.999.999/99');
    $('.cep').mask('99.999-999');
    $('.fone').mask('(99) 9999-9999');


// Funcao para Modal
$('a[name=modal]').click(function(){
	var frameSrc = $(this).attr('rel');

    $('#myModal').on('show', function () {
          $('iframe').attr("src",frameSrc);
      });
    $('#myModal').modal({
    		show:true,
    		keyboard: false})
	});

});