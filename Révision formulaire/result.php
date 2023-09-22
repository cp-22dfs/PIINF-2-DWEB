<style>
    .ich{
        background-color: lightgray;
    }
</style>


<?php
echo "<h2>Résultat de l'envoie du formulaire</h2>";


echo "<table border='1'>";
echo "<tbody>";
echo "<tr>";
echo "<th style='background-color: lightgray'>"."Clés"."</th>";
echo "<th style='background-color: lightgray'>"."Valeurs"."</th>";
echo"</tr>";

$i = 0;
$x = 1;
foreach ($_POST AS $key => $val){
    echo"<tr>";

    if($x++%2 == 0){
        echo"<th class='ich'>".$key."</th>";
    }else{
        echo"<th>".$key."</th>";
    }

    if($i++%2 == 1){
        echo"<th class='ich'>".$val."</th>";
    }else{
        echo"<th>".$val."</th>";
    }
    echo"</tr>";



    /*if($key  =="send_name" && $val =="envoyer"){
       echo"<th class='ich'>".$val."</th>";
    }elseif($key =="annee" && $val =="2" ){
        echo"<th class='ich'>".$val."</th>";
    }else{
        echo"<th>".$val."</th>";
    }*/
    //echo"<th>".$val."</th>";



}
$y = 0;
$l = 1;
foreach ($_GET AS $key => $val){
    echo"<tr>";

    if($l++%2 == 0){
        echo"<th class='ich'>".$key."</th>";
    }else{
        echo"<th>".$key."</th>";
    }

    if($y++%2 == 1){
        echo"<th class='ich'>".$val."</th>";
    }else{
        echo"<th>".$val."</th>";
    }
    echo"</tr>";



    /*if($key  =="send_name" && $val =="envoyer"){
       echo"<th class='ich'>".$val."</th>";
    }elseif($key =="annee" && $val =="2" ){
        echo"<th class='ich'>".$val."</th>";
    }else{
        echo"<th>".$val."</th>";
    }*/
    //echo"<th>".$val."</th>";



}


echo"</tr>";
echo"</tbody>";
echo"</table>";

if($_GET == TRUE) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

if($_POST == TRUE) {

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
