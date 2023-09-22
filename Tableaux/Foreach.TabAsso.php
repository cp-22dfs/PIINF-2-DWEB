<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
</head>
<body>
<?php


$tab = array("nom" => "Lerdorf",
             "prenom" => "Rasmus",
             "adresse" => "Chemin des appaches 7",
             "npa" => "2610",
             "ville" => "St-Imier",
             "email" => "rasmus.lerdorf@php.net");

//echo "<pre>";
//print_r($tab);
//echo "</pre>";

echo "<table>";
echo "<tr>";
echo "<th>Clef</th>";
echo "<th>Valeur</th>";
echo "</tr>";

foreach($tab AS $k => $value){
    echo "<tr>";
    echo "<td>$k</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}

echo "</table>";

//foreach($tab AS $k => $value){
//  echo $k." ".$value;
//  echo "<br>";
//}




?>
</body>
</html>
