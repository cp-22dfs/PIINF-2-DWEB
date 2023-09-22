<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diogo Soares</title>
</head>
<body>
<h1>Choix des options</h1>

    <?php
    echo "<form action='result.php' method='post'>";

    require_once("data.inc.php");


    foreach ($tab_options AS $nom_choix => $choix){
        echo "$choix :<input type='checkbox' value='$choix' name='$choix'>";
        echo "<br>";
    }
    echo "<input type='submit' value='Envoyer' name='send'>";


    echo "</form>"
    ?>



</body>
</html>