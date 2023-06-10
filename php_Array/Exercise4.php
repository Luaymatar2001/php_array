<?php
echo "Exercise 4";
echo "-------------------";
function factor($num)
{
    if ($num <= 1)
        return 1;
    else
        return $num * factor($num - 1);
}


$number = 10;
echo "The Factor for $number is : " . factor($number);
