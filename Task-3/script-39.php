<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$portion = array_slice($numbers, 4, 5);

echo "Portion of the array: ";

for ($i = 0; $i < count($portion); $i++) {
    echo $portion[$i] . " ";
}

?>