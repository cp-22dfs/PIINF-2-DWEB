<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
</head>
<body>
<?php
$jour = date("w") -1;
$tab = array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");
echo "nous sommes le $tab[$jour]";

?>
</body>
</html>