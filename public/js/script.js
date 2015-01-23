$(function() {
    $(".validaRg").blur(function() {
        var identidade = $(this).val();

        $.ajax({
            type: "POST",
            url: "/buscaRg",
            dataType: "json",
            data: {
                rg: identidade
            },
            cache: false,

            beforeSend: function() {
                $("#load").html("<p>Aguarde pesquisando...</p>").show();
            },
            success: function(data) {
                $("#load").remove();
                alert("Este Rg ja esta cadastrado com para a solicitação " + data[0]['id'] + ".");
                window.location = "/fichas/" + data[0]['id'] + '/edit';
            } //end function

        }); //close ajax   
       
    })


    $("input[type=text], textarea").blur(function() {
        val = $(this).val().toUpperCase()

        $(this).val(val)
    });

    $(".valor").maskMoney({
        prefix: 'R$ ',
        allowNegative: true,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });
    $('.data').mask('99/99/9999');
    $('.emissor').mask('aaa/aa');
    $('.cpf').mask('999.999.999/99');
    $('.cep').mask('99.999-999');
    $('.fone').mask('(99) 9999-9999');
    $('.numero').bind("keyup blur focus", function(e) {
                e.preventDefault();
                var expre = /[^0-9]/g;
                // REMOVE OS CARACTERES DA EXPRESSAO ACIMA
                if ($(this).val().match(expre))
                    $(this).val($(this).val().replace(expre,''));
            });

});
