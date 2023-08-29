<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />

</head>
<body>

<form action="swissresult.php" method="post">


    <img src="logo-swiss-2x.png">

    <h2>Réservez votre vol</h2>

<?php


require_once("aeroports.inc.php");
define('genev', 'Genève GVA');

echo "De   "."<select name='aeroport'>";
    echo "<option value=".genev.">".genev."</option>";

    foreach($aeroport AS $key => $lieu) {
        echo "<option value=\"".$key."\">".$lieu."</option>";
        if($lieu == "Genève"){
            echo"";
        }
    }
echo "</select>";

echo "   À    "."<select name='aeroport'>";
foreach($aeroport AS $key => $lieu) {
    echo "<option value=\"".$key."\">".$lieu."</option>";
}
echo "</select>";
echo "<br>";
echo "<br>";

$date = date("d. m. y");

echo "Vol Aller <input type='date' name='date' value=$date>";
echo "Vol Retour <input type='date' name='date' value=$date>";

echo "<br>";
echo "<br>";

echo "Adultes <input type='number' name='date' min='1' max='4' value=1>";

echo "<br>";
echo "<br>";

echo "Enfants <input type='number' name='date' min='0' max='4' value=1>";

echo "<br>";
echo "<br>";

echo "<span class='bebe'>Bébés</span> <input type='number' name='date' min='0' max='4'value=1>";

echo "<br>";
echo "<br>";

echo "<input type='checkbox' name='Inscriptions' value='Inscrit'> Réserver votre siège?";

echo "<br>";
echo "<br>";

echo "<input type='submit' value='Rechercher votre Vol'>";

?>




</body>
</html>
