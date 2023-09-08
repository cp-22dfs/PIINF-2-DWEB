<!DOCTYPE html>
<?php
session_start();
?>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        img.center{
            display: block;
            margin-left: 100px;
            width: auto;
        }
        input.center{
            border: lightgray 2px solid;
            margin-left: 200px;
            display:block;
        }

        h2{
            margin-left: 50px;
        }
        select{
            margin-left: 35px;
            margin-right: 60px;
        }
        .bebe{
            margin-left: 10px;
        }
        .À{
            margin-left:53px;
        }
    </style>
</head>
<body>
<?php
echo "<img src='logo-swiss.png' alt='logo swiss air' class='center'>";
if(array_key_exists('vols', $_SESSION)){
    echo "<h2>Réservez votre vol retour</h2>";
}
else {
    echo "<h2>Réservez votre vol aller</h2>";
}

// invocations du tableau aeroports et catégories
require_once("aeroports.inc.php");
require_once("category.inc.php");


echo "<form action='swissresult.php' method ='post'>";
if(array_key_exists('vols', $_SESSION)) {


    echo "De" . "<select name='decolage'>";
    foreach($aeroports AS $keyAE => $valueAE){
        if($_SESSION['vols'][0]['arrivé'] == $keyAE){
            echo "<option value =".$keyAE." selected='selected'>".$valueAE."</option>";
        }

    }

    foreach ($aeroports as $key => $dest) {
        echo "<option value=\"" . $key . "\">" . $dest . "</option>";
    }

    echo "</select>";

    echo "À" . "<select class='À' name='arrivé'>";

    foreach($aeroports AS $keyAE => $valueAE){
        if($_SESSION['vols'][0]['decolage'] == $keyAE){
            echo "<option value =".$keyAE." selected='selected'>".$valueAE."</option>";
        }

    }
    foreach ($aeroports as $key => $dest) {
        echo "<option value=\"" . $key . "\">" . $dest . "</option>";
    }
    echo "</select>" . "<br>";

    }

else{
// création d'une constante par défaut (Genève)Cours inter-entreprise
    define("pardefaut", "Genève");

// importation du tableau en haut dans le champ select
    echo "De" . "<select name='decolage'>";

    foreach ($aeroports as $key => $dest) {
        echo "<option value=\"" . $key . "\">" . $dest . "</option>";
    }

// faire une autoselection de notre constante Genève
    echo "<option value ='GVA' selected='selected'>" . pardefaut . "</option>";
    echo "</select>";

    echo "À" . "<select class='À' name='arrivé'>";
    foreach ($aeroports as $key => $dest) {
        echo "<option value=\"" . $key . "\">" . $dest . "</option>";
    }
    echo "</select>" . "<br>";
}

$date = date("d.m.Y");
$demain = date("d") + 1  .".".date("m").".".date("Y");
echo "Vol aller "."<input type='date' name='date_depart' value=$date>";
//echo "Vol retour"."<input type='text' name='date_retour' value=$demain>"."<br>"."<br>";


echo "<br>";
echo $category['adultes']."<input type='number' name=' cat_1' value='1' min='1' max='4'>"."<br>";
echo $category['enfants']."<input type='number' name=' cat_2' value='0' min='0' max='4'>"."<br>";
echo $category['bebes']."<input class='bebe' type='number' name=' cat_3' value='0' min='0' max='4'>"."<br><br>";


echo "<input type='checkbox' name='reserver_siège' value='1'>"."Réserver votre siège ?"."<br>"."<br>";


echo "<input type='submit' name='Recherche' value='Rechercher votre vol' class='center'>";

echo "</form>";


?>
</body>
</html>