<?php

function sumOfMultiples($n)
{
    $sum = 0;
    for ($x = 1; $x <= $n; $x++) {
        if (($x % 3 == 0) || ($x % 5 == 0) || ($x % 7 == 0)) {
            $sum += $x;
        }
    }
    return $sum;
}
