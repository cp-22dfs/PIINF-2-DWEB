<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />

    <style>
th{
    background-color: lightgray;
}
    </style>

</head>
<body>
<?php
$tab = array
    ("formation" => "ict",
    "annee" => "2",
    "matu" => "1",
    "send_name" => "envoyer",);

echo "<table border='1px'>";
echo "<tr>";
echo "<th>Clefs</th>";
echo "<th>Valeurs</th>";
echo "</tr>";

foreach($tab AS $k => $value){
    echo "<tr>";
    echo "<td>$k</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>