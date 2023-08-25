<?php
$arraycity = array('Toronto', 'New-York', 'Vancouver');

echo "<select name='city' onchange='alert(this.value)'>" . PHP_EOL ;

echo "<option>Sélectionnez</option>" . PHP_EOL ;

foreach( $arraycity as $ville ) {
    echo "<option value='$ville'>$ville</option>" . PHP_EOL ;
}
echo "</select >" . PHP_EOL ;
?>