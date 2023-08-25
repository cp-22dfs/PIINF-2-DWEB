<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; chraset=utf-8" />
    <style>
th , td , table{text-align : center;
    border: solid 1px black;}
th , td {width: 30px;}
th { background-color: lightgray;

}
    </style>
</head>
<body>

<?php

echo "<h1 class=\"titre\">Table de multiplication</h1>";
echo "<table>";
for ($i=1;$i<=12;$i++){
  echo "<tr>";
  if($i == 1){
      echo "<th> </th>";
  }else{
  echo "<th> $i </th>";}
  for ($j=1;$j<=12;$j++){
      if($i == 1){
          echo "<th> $j </th>";
      }else{
          echo "<td>".$i*$j."</td>";
      }
         }

  echo "</tr>";
}

?>
</body>
</html>