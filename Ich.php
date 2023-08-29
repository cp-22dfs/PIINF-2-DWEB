<?php


include("notes.inc.php");

echo "<pre>";
print_r($tab_notes);


foreach ($tab_notes AS $domaine){
    echo $domaine['desc']."<br>";

}

echo "</pre>";
?>