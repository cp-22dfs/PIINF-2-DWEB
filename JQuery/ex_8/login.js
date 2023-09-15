$(document).ready(function() {
    if ($("#container").attr('name') !== undefined) {
        alert('The name attribute exists');
    }
    else {
        alert('The name attribute does not exist');
    }
});