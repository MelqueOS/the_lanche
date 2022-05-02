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
        if (array[9].value == '' || array[10].value == '') {
            $('.resp').html('<div class="erros"><p>Preencha todos os dados sobre seu endereço</p></div>');
        } else {
            $('.resp').html('<div class="ok"><p>Aguarde redirecionamento!</p></div>');
            
            next($(this));
        }

    });

});





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