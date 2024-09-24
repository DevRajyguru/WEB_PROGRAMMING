<?php

$student = array("name" => "abc", "age" => 18, "course" => "PHP");

$key = "age";
// $key = "class";

if (array_key_exists($key, $student)) {
    echo "Key " . $key . " exists in the associative array";
} else {
    echo "Key " . $key . " does not exist in the associative array";
}

?>
