<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

<?php
//invocations du tableau aeroports
require_once("aeroports.inc.php");
require_once("category.inc.php");
$_SESSION['vols'][] = $_POST;



foreach ($aeroports as $key => $thevalue){
    if ($_SESSION['vols'][0]['decolage'] == $key){
        echo "<h3>Informations concernant votre vol au départ de ".$thevalue." ";
    }
}

    foreach ($aeroports as $key => $thevalue){
        if ($_SESSION['vols'][0]['arrivé'] == $key){
            echo "à ".$thevalue."</h3>";
        }
    }


foreach($_SESSION['vols'] as $value => $nbr){
    foreach ($aeroports as $key => $thevalue){
        if ($_SESSION['vols'][$value]['decolage'] == $key){
            echo "Départ : ".$thevalue." (".$_SESSION['vols'][$value]['decolage'].")";
            echo "<br>";
        }
    }
    foreach ($aeroports as $key => $thevalue){
        if ($_SESSION['vols'][$value]['arrivé'] == $key){
            echo "Arrivée : ".$thevalue." (".$_SESSION['vols'][$value]['arrivé'].")";
            echo "<br>";
        }
    }

    echo "Date de départ : ".$_SESSION['vols'][$value]['date_depart'];
    echo "<br>";
    echo "Passagers : ".($_SESSION['vols'][$value]['cat_1'] + $_SESSION['vols'][$value]['cat_2'] + $_SESSION['vols'][$value]['cat_3'])."; ";
    echo "<br>";
    echo $_SESSION['vols'][$value]['cat_1']. " adulte(s)";
    echo "<br>";
    echo $_SESSION['vols'][$value]['cat_2']. " enfant(s)";
    echo "<br>";
    echo $_SESSION['vols'][$value]['cat_3']. " bébé(s)";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}





echo "<pre>";
print_r($_SESSION);
echo "</pre>";




//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if(count($_SESSION['vols']) >= 2){
    session_destroy();
}


?>
<a href="swiss.php">Vol retour</a>
</body>
</html>
