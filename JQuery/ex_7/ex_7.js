
$('img').on( "click", function (){
    $('img').fadeOut("slow");
});

$('img').on( "click", function (){
    $('img').fadeIn("fast");
});

/* jQuery(document).ready(function($){
    $('#example').tooltip({
        animation: true,
        html: true,
        placement: 'bottom'
    });
});*/

$(function() {
    $('p').tooltip();
});
