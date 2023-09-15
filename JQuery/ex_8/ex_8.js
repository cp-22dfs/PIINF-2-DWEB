$(function() {
    $('img[alt="à changer"]').each(function(index, element) {
        var source = $(element).attr('src');
        $(element).attr('alt', source);
    });

    $('img').each(function() {
        var text = $(this).attr('alt');
        alert(text);
    });
});
