$('td').each(function(){

    $('img').mouseover(function() {
        var texte = $(this).attr('alt');
        $(this).css("height", "500px");
        $('h1').html(texte);
    });


    $('img').mouseout(function() {
        $(this).css("height", "200px");
        $('h1').html(' ');
    });


});

