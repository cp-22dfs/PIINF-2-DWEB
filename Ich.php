<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
<style>
    th , td , table{text-align : left;
        border: solid 1px black;}
    th , td {width: 30px;}
    th {
        background-color: cornflowerblue;
    }

    .tresBon{
        background-color: lightgreen;
    }
    .bon{
        background-color: greenyellow;
    }
    .pasBon{
        background-color: red;
    }

    .erreur{
        background-color: red;
    }



</style>
</head>
<?php


include("notes.inc.php");

echo "<pre>";
//print_r($tab_notes);

echo "Notes de mon apprentisage";
echo "<br>";

foreach ($tab_notes AS $nom_domaine => $domaine){


    $nb_notes = 0;
    $somme_notes = 0;

    echo "<table border='2px'>";
    echo "<tr><th colspan='4'>".$domaine['desc']."</th></tr>";

    foreach ($domaine['modules'] AS $key => $module){

        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>".$module['desc']."</td>";
        echo "<td>".$module['date']."</td>";
        if($module['note'] > 6){
            echo "<td class='erreur'>invalide</td>";
        }
        else if($module['note'] > 4.5){
            echo "<td class='tresBon'>".round($module['note'],1)."</td>";
        }elseif($module['note'] <= 4.5 && $module['note'] >= 3.5){
            echo "<td class='bon'>".round($module['note'],1)."</td>";
        }else{
            echo "<td class='pasBon'>".round($module['note'],1)."</td>";
        }
        $nb_notes ++;
        $somme_notes += $module['note'];

        //echo "<td>".($module['note']/$module['note'].count($module))."</td>";

        //print_r($module);
        echo "</tr>";

        //print_r("<th></th>");
    }
    $moyenne = $domaine['moyenne'] = $somme_notes/$nb_notes;
    echo "<tr>";

    echo "<td colspan='3'>Moyenne</td>";
    echo"<br>";
    if($module['note'] > 6){
        echo "<td class='erreur'>invalide</td>";
    }
    else if ($moyenne > 4.5){
        echo "<td class='tresBon'>".round($moyenne,1)."</td>";
    }elseif ($moyenne <= 4.5 && $moyenne >= 3.5){
        echo "<td class='bon'>".round($moyenne,1)."</td>";
    }else{
        echo "<td class='pasBon'>".round($moyenne,1)."</td>";
    }

    $tab_notes[$nom_domaine]['moyenne'] = $moyenne;


    echo "</tr>";
    //print_r($domaine);
    //list($mandat, $mettre, $auto, $ana, $creer, $sec, $app, $man) = $module['note'];
}
echo "</table>";

echo "<table border='2'>";

echo "<tr><th colspan='4'>Moyennes</th></tr>";

foreach ($tab_notes AS $domaine){
    echo "<tr>";
    echo "<br>";
    echo "<td>".$domaine['desc']."</td>";
    echo "<td>".$domaine['ponderation']."%</td>";
    if($domaine['moyenne'] > 4.5){

        echo "<td class='tresBon'>".round($domaine['moyenne'],1)."</td>";

    }elseif($domaine['moyenne'] <= 4.5 && $domaine['moyenne'] >= 3.5) {
        echo "<td class='bon'>".round($domaine['moyenne'],1)."</td>";

    }else{
        echo "<td class='pasBon'>".round($domaine['moyenne'],1)."</td>";
    }

    echo "</tr>";


    //list($value1, $value2) = $moyenne;
    // echo $value1;


}

$resultat = 0;
foreach($tab_notes AS $domaine){
    $resultat += $domaine['moyenne'] * $domaine['ponderation'];
}
$tab_notes['moyenne'] = round($resultat / 100,1 );

echo"<tr>";
    echo"<td>"."Moyenne Générale"."</td>";
    echo"<td>"."</td>";

    if($tab_notes['moyenne'] > 4.5){
        echo"<td class='tresBon'>".round($tab_notes['moyenne'],1)."</td>";
    }elseif($tab_notes['moyenne'] <= 4.5 && $tab_notes['moyenne'] >= 3.5){
        echo"<td class='bon'>".round($tab_notes['moyenne'],1)."</td>";
    }else{
        echo"<td class='pasBon'>".round($tab_notes['moyenne'],1)."</td>";
    }

    //if($tab_notes['moyenne'] > 3.5){
    //echo"<img src=dinosaur.gif>";
    //}
    //if($tab_notes['moyenne'] <= 3.5){
    //echo"<img src=triste.gif>";
    //}


    echo"</tr>";




    //Quentin

//background-image: url("Quentin.jpg");
        //background-position: 800px 440px;
//explode("", $moyenne);

//$moyennee = array(5.7, 4.6);
//echo ($moyennee[0] * 0.08 + $moyennee[1] * 0.02) + 5;

echo "</table>";

//echo ($tab_notes['cie']['moyenne'] * $tab_notes['cie']['ponderation']/100) + ($tab_notes['ci']['moyenne'] * $tab_notes['ci']['ponderation']/100);
// echo "({$tab_notes['cie']['modules'][123]['note']} + {$tab_notes['cie']['modules'][187]['note']}) / 2";
echo "</pre>";
?>

    </body>
</html>

