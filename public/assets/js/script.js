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
                $("#ajax_message").html("<p>Please wait...</p>").show();
            },
            success: function(data) {
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
    $('.numero').keypress(function(event) {
        var tecla = (window.event) ? event.keyCode : event.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla != 8) return false;
            else return true;
        }
    });

});

var App = angular.module('App',[]);
    App.config(function($interpolateProvider) {
          $interpolateProvider.startSymbol('%%');
          $interpolateProvider.endSymbol('%%');
    });