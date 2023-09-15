

/*$(document).ready(function() {
    alert("Formatage");
});*/




$(function() {
    alert("Formatage");
    alert("Inversion des cellules");

    $('.vert').css("color", "red");
    $('.rouge').css("color", "green");

    alert("Réinversion des cellules");

    $('.rouge').css("color", "red");
    $('.vert').css("color", "green");

    alert("Suppression des classes couleur");

    $('td').removeClass('vert');
    $('td').removeClass('rouge');


});

