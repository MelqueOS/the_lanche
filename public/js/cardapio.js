// ALTERAR A COLORAÇÃO DE UM ITEM AO CLICAR/RECLICAAR
$('.box-item').click(function () {
    var cor = $(this).css("border-color");

    if (cor == "rgb(204, 208, 213)") {
        $(this).css({ "border": "2px solid #EB5600", "background-color": "#eb560025", "box-shadow": "none" });

    }
    else {
        $(this).css({ "border": "1px solid #ccd0d5", "background-color": "#f7f7f7", "box-shadow": "3px 3px 2px rgb(110, 110, 110)" });
    }

});