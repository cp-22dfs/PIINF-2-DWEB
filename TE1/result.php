
<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diogo Soares</title>
</head>
<body>
<h1>Mes options</h1>
<?php

/*print_r($_POST);*/

foreach ($_POST AS $key => $val) {
    echo "<tr>";
    echo "<th>".$val."</th>";
    echo "<br>";
    echo "<br>";

}


if(count($_POST) == 1){
    echo "<br>";
    echo "Aucune option sélectionnée";
}

if(count($_POST) == 2){
    echo "<br>";
    echo "Une option sélectionnée";
}

if(count($_POST) == 3){
    echo "<br>";
    echo "Deux options sélectionnées";
}

if(count($_POST) == 4){
    echo "<br>";
    echo "Trois options sélectionnées";
}

if(count($_POST) == 5){
    echo "<br>";
    echo "Quatre options sélectionnées";
}

if(count($_POST) == 6){
    echo "<br>";
    echo "Cinque options sélectionnées";
}

if(count($_POST) == 7){
    echo "<br>";
    echo "Six options sélectionnées";
}
?>



</body>
</html>