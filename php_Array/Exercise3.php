<?php

echo "Exercise 3";
echo "-------------------------------";

function multipy_two(array $a, array $b)
{
    $mult = array();
    foreach ($a as $key => $value) {
        $mult[] = $value * $b[$key];
    }
    return $mult;
}

$a = [4, 3, 6, 64];
$b = [4, 2, 3];


var_dump(multipy_two($a, $b));
