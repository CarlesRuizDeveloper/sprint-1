<?php

function calcularPreuXocolates($quantity) {
    $priceXocolates = 1.0;
    return $quantity * $priceXocolates;
}


function calcularPreuXiclets($quantity) {
    $priceXiclets = 0.5;
    return $quantity * $priceXiclets;
}


function calcularPreuCaramels($quantity) {
    $priceCaramels = 1.5;
    return $quantity * $priceCaramels;
}

$total = calcularPreuXocolates(2) + calcularPreuXiclets(1) + calcularPreuCaramels(1);

echo "El total de la compra es de: " .$total. " euros";
?>
