<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$searchElement = 5;
// $searchElement = 11;

$index = array_search($searchElement, $numbers);

if ($index !== false) {
    echo "Element " . $searchElement . " found at index " . $index;
} else {
    echo "Element " . $searchElement . " not found in the array";
}

?>