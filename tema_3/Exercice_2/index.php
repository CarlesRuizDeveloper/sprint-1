<?php

$X = array (10, 20, 30, 40, 50,60);
var_dump($X);
echo "El array X tiene un tamaño de ".size($X)." posiciones";
unset($X[3]);
$X=array_values($X);
var_dump($X);
echo "El array X tiene ahora un tamaño de ".size($X)." posiciones";
function size($X){
    return  count($X);
}

?>