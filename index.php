<html>
<head>
    <title>Exemple 1</title>

</head>
<style>
</style>
<body>
<h2>Rappel sur les formulaires</h2>

<form action="result.php" method="post">

    <select name="formation">
        <option value="ict">Informaticien Web</option>
        <option value="oic">Operateur informatique</option>
        <option value="ich">Informaticien Dev</option>
    </select>

    <br>

    <input type="radio" name="annee" value="1">1ère année</inputradio> <br>
    <input type="radio" name="annee" value="2">2ème année</inputradio> <br>

    Maturité : <input type="checkbox" name="matu" value="1">

    <br>
    <input type="submit" name="send_name" value="envoyer">
    <br>

</form>

<br>
<br>


<form action="result.php" method="get">
    <select name="formation">
        <option value="ict">Informaticien Web</option>
        <option value="oic">Operateur informatique</option>
        <option value="ich">Informaticien Dev</option>
    </select>

    <br>

    <input type="radio" name="annee" value="1">1ère année</inputradio> <br>
    <input type="radio" name="annee" value="2">2ème année</inputradio> <br>

    Maturité : <input type="checkbox" name="matu" value="1">

    <br>
    <input type="submit" name="send_name" value="envoyer">
    <br>
</form>
</body>
</html>

