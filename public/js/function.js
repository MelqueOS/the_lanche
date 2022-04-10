$(function () {
    var atual_fs, next_fs, prev_fs;
    $('.next').click(function () {
        atual_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active');
        atual_fs.hide(800);
        next_fs.show(800);
    })

    $('.prev').click(function () {
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('#progressbar li').eq($('fieldset').index(atual_fs)).removeClass('active');
        atual_fs.hide(800);
        prev_fs.show(800);
    })

    $('#formulario input[type=submit]').click(function () {
        return false;
    })
});
