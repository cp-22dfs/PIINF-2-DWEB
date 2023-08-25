<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
</head>
<body>
<?php

$tab[1] = 7;
$tab[2] = 14;
$tab[3] = 21;
$tab[4] = 28;
$tab[5] = 35;
$tab[6] = 42;
$tab[7] = 49;
$tab[8] = 56;
$tab[9] = 63;
$tab[10] = 70;
$tab[11] = 77;
$tab[12] = 84;


for ($i=1;$i<=12;$i++){

    foreach ($tab as $k => $v){

    echo "$i * 7 = $v";
    echo "<br>";
    $i++;

}
}


?>
</body>
</html>