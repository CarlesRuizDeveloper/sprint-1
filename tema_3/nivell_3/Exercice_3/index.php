<?php

$numsArray = array(3, 4, 11);
$arrayPrimes = [];
$result = 0;

for ($i = 0; $i < count($numsArray); $i++) {
    $numero = isPrime($numsArray[$i]);
    if ($numero == true) {
        $result = (array_push($arrayPrimes, $numsArray[$i]));
    }
}
var_dump(array_reduce($arrayPrimes, "suma"));

function isPrime($num){
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function suma($carry, $item){
    $carry += $item;
    return $carry;
}
