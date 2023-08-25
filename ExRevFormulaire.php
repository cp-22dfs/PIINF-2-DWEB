<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />

</head>
<body>

Rappel Formulaire<br>
<br>
<?php
$avis= array("Insuffisant","Suffisant","Bien","Très Bien");

echo "Votre avis sur le site: <select name='avis' onchange='alert(this.value)'>" . PHP_EOL  ;

echo "<option>Sélectionnez</option>" . PHP_EOL ;

foreach( $avis as $bien ) {
    echo "<option value='$bien'>$bien</option>" . PHP_EOL;
}
echo "</select >" . PHP_EOL ;
?>

<br>
<br>
<form action="result.php" method="post">

Nom: <input type="text" name="nom utilisateur">
<br>
Email: <input type="email" name="adresse email">
<br>

<br>
    Homme<input type="radio" name="genre" value="homme"><br>
    Femme<input type="radio" name="genre" value="femme"><br>
    <br>
    Inscription à la newsletter: <input type="checkbox" name="Inscriptions" value="Inscrit"><br>
    <br>
    Commentaire: <input type="text" name="commentaire"><br>
    <br>
    <input type="submit" value="envoyer"><br>

</body>
</html>
