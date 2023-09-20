<?php

define("DEFAULT", 10);

$num = 10;
$interval = 21;

function counter($num, $interval)
{
    $i = 0;

    if ($interval < 0 || !is_numeric($interval) || !is_numeric($num)|| $interval >= $num) {
        echo "Los datos introducidos son incorrectos. <br> Deben ser números y mayores de 1. <br> El intervalo no puede ser mayor que el número";
    } else {
        do {
            echo $i . "<br>";
            $i = $i + $interval;
        } while ($i <= $num);
    } 
}
echo counter($num, $interval);
