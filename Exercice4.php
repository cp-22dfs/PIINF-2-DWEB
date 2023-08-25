<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
</head>
<body>
<?php

// diamètre, circonférence, aire

$rayon = 3;
$pi = pi();
$diametre = $rayon*2;
$circonference = $diametre/$pi;
$aire = $rayon*$rayon*$pi;

echo $diametre;
echo "<br>";
echo $circonference;
echo "<br>";
echo $aire;


?>
</body>
</html>