<?php

define("DEFAULT_NUM",10);

function counter($num, $interval)
{
    $i = 0;
    if($num < 1 || !is_numeric($num)){
        $num = DEFAULT_NUM;
    }

    if ($interval < 0 || !is_numeric($interval) || $interval > $num) {
        echo "Los datos introducidos son incorrectos. <br> Deben ser números y mayores de 1. <br> El intervalo no puede ser mayor que el número";
    } else {
        do {
            echo $i . "<br>";
            $i = $i + $interval;
        } while ($i <= $num);
    } 
}
echo counter(25, 3); 
?>