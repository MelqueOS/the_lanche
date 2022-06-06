// ALTERAR A COLORAÇÃO DE UM ITEM AO CLICAR/RECLICAAR
$('.box-item').click(function () {
    var cor = $(this).css("border-color");

    if (cor == "rgb(235, 86, 0)") {
        $(this).css({ "border": "2px solid #333333", "background-color": "#eb5600bf", "box-shadow": "none" });

    }
    else {
        $(this).css({ "border": "1px solid #EB5600", "background-color": "#EB5600", "box-shadow": "3px 3px 2px rgb(110, 110, 110)" });
    }

});