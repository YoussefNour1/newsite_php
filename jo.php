<?php

function hello(int $number): int
{
    if ($number == 0) return 1;
    return $number * hello($number-1);
}
//print hello(7);

function sum(...$numbers):int{
    $sum = 0;
    for ($i = 0; $i < sizeof($numbers); $i++ ){
        $sum += $numbers[$i];
    }
    return $sum;
}

$sum = sum(1,2,3,4,5);
$ar = array(1,5,3,8,78,54);
rsort($ar);
print_r($ar);