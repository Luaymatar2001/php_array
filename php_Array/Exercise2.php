<?php
echo "Exercise 2";
echo "-------------------------------";

function Long_str(array $arr_str)
{
    $long_Str = '';

    foreach ($arr_str as $key => $value) {
        if (strlen($value) > strlen($long_Str))
            $long_Str = $value;
    }

    return $long_Str;
}

$arr_str = [
    'a' => "re",
    'b' => "Jarwan",
    'c' => 'Luay Ali Matter'
];

echo "Longest Strings : " . Long_str($arr_str);
