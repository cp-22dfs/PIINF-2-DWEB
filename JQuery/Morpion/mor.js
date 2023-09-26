

$(function () {

    var n = 1;

    $('td').click(function () {

        if (n == 0 && !$(this).hasClass('rond') && !$(this).hasClass('rond')) {
            $(this).addClass("symbole_" + n).addClass('rond');
            n = 1;
        }

        else if (n == 1 && !$(this).hasClass('croix') && !$(this).hasClass('rond')) {
            $(this).addClass("symbole_" + n).addClass('croix');
            n = 0;
        }



    });

});

function check(symbol) {
    if ($('td = 0').hasClass('symbole_0') &&
        $('td = 1').hasClass('symbole_0') &&
        $('td = 2').hasClass('symbole_0'))
    {
        alert('bien');

    }
}