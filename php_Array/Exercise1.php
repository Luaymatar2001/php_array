<?php
echo "Exercise 1";
echo "-------------------------------";

function return_odd(array $arr)
{
    $arrTemp = array();
    foreach ($arr as $value) {

        if ($value % 2 != 0) {
            $arrTemp[] = $value;
        }
    }
    return $arrTemp;
}

$arr = [1, 3, 4, 7, 8, 9];
$arrTemp = return_odd($arr);

var_dump($arrTemp);
