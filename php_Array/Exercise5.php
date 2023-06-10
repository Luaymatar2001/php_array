<?php
echo "Exercise 5";
echo "---------------------------";
function primeNumber($number, $flag = 0)
{
    for ($i = ($number / 2); $i > 1; $i--) {
        if ($number % $i == 0) {
            $flag++;
            echo $number . " is not Prime Number";
            break;
        }
    }

    if ($number == 1)
        echo $number . " is not PrimeNumber";
    elseif ($flag == 0) {
        echo $number . " is PrimeNumber";
    }
}

$number = 33;

echo primeNumber($number);
