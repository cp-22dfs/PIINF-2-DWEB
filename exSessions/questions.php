

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test végétarien</title>
</head>
<body>




<?php
require_once("newfile.php");

echo $tab['question'][0]['texte'];
echo "<br>";
echo "<br>";
echo "<br>";

echo "<input type='radio' name='choix1' value='1'>".$tab['question'][0]['rep_1']."<br>"."<br>";
echo "<input type='radio' name='choix2' value='2'>".$tab['question'][0]['rep_2']."<br>"."<br>";
echo "<input type='radio' name='choix3' value='3'>".$tab['question'][0]['rep_3']."<br>"."<br>";
echo "<input type="submit" value="question suivante">"."<br>";



?>
</body>
</html>
