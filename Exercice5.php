<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
</head>
<body>
<?php



echo "<br>";

$date = date("s");

echo $date;
echo "<br>";

if ($date%2){
    echo "Numéro impaire";
}
else{
    echo "Numéro paire";
}

?>
</body>
</html>