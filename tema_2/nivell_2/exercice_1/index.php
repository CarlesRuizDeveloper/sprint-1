<?php

function price($minutes)
{
    if ($minutes < 0.01 || !is_numeric($minutes)) {
        echo "El valor introducido no es correecto.";
    } else {
        define("MINIMUM_MINUTS", 3);
        define("PRICE_MINUTE", 0.10);
        if ($minutes <= MINIMUM_MINUTS) {
            $price = PRICE_MINUTE;
        } else {
            $price = (($minutes - MINIMUM_MINUTS) * 0.05) + (0.10);
        }
        return $price;
    }
}
echo price(13);
