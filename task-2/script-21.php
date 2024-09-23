<?php
$number = 12321;

$numberStr = (string)$number;

$reversedStr = strrev($numberStr);

if ($numberStr === $reversedStr) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>