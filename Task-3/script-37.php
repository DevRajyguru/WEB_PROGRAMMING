<?php

$numbers = array(1, 2, 3, 4, 5);

echo "Initial array: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";

array_push($numbers, 6, 7, 8);

echo "Array after adding elements: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "\n";

array_pop($numbers);

echo "Array after removing the last element: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

?>