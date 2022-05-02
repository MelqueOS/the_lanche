$(function () {
    var atual_fs, next_fs, prev_fs;
    var formulario = $('form[name=formulario]');

    function next(elem) {
        atual_fs = $(elem).parent();
        next_fs = $(elem).parent().next();

        $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active');
        atual_fs.hide(800);
        next_fs.show(800);
    }

    $('.prev').click(function () {
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('#progressbar li').eq($('fieldset').index(atual_fs)).removeClass('active');
        atual_fs.hide(800);
        prev_fs.show(800);
    })

    // validacao dos campos em branco
    
    $('button[name=next1]').click(function () {
        var array = formulario.serializeArray();
        
        if (array[1].value == '' || array[2].value == '' || array[3].value == '' || array[4].value == '' || array[5].value == '') {
            $('.resp').html('<div class="erros"><p>Preencha todos os dados da primeira etapa!</p></div>');
        } else {
            $('.resp').html('');
            next($(this));
        }
    })


    $('button[name=next2]').click(function () {
        var array = formulario.serializeArray();
        if (array[6].value == '' || array[7].value == '') {
            $('.resp').html('<div class="erros"><p>Preencha todos os dados sobre os seus contatos!</p></div>');
        } else {
            $('.resp').html('');
            next($(this));
        }
    });

    $('button[type=submit]').click(function (evento) {

        var array = formulario.serializeArray();
        if (array[9].value == '') {
            $('.resp').html('<div class="erros"><p>Preencha todos os dados sobre seu endereço</p></div>');
        } else {
            $('.resp').html('<div class="ok"><p>Aguarde redirecionamento!</p></div>');
            next($(this));
        }

    });

});


// TELA CARDAPIO
// ALTERAR A COLORAÇÃO DE UM ITEM AO CLICAR/RECLICAAR
$('.box-item').click(function () {
    var cor = $(this).css("border-color");

    if (cor == "rgb(204, 208, 213)") {
        $(this).css({ "border": "2px solid #EB5600", "background-color": "#eb560025" });
    }
    else {
        $(this).css({ "border": "1px solid #ccd0d5", "background-color": "#f7f7f7" });
    }

});

// MASCARAS PARA AS TELAS DE CADASTRO(EMPRESA E CLIENTE)
$(document).ready(function () {
    $('.cnpj').mask('99.999.999/9999-99');
    $('.phone').mask('(99) 9999-9999');
})





// valido = true
// $('.form-control:visible').each(function() {
//     if ($(this).val() == '') {
//         $(this).addClass('is-invalid');
//         $(this).next('.invalid-feedback').show();
//         valido = false;
//     } else {
//         $(this).removeClass('is-invalid');
//         $(this).next('.invalid-feedback').hide();
//     }
// });

// if (valido)