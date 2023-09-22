var n = 1;

$(function(){
    $('td').click(function(){


        if(n === 0)
        {
            $(this).addClass("symbole_1");
            n --;

        }

        $(this).addClass("symbole_0");
        n --;

        }
    )
});