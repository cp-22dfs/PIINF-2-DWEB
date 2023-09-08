<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test végétarien</title>
</head>
<body>
<h2>Testez votre capacité à devenir végétarien</h2>
<?php
require_once("newfile.php");
?>
<br>

Prénom: <input type="text" name="prénom">

<br>

<form method="post" action="questions.php">
<input type="submit" value="Débuter le test"><br>
</form>
<br>

<h2>Contenu de la session</h2>

<?php

echo "<pre>";

print_r($_POST);

echo "</pre>";

?>
</body>
</html>