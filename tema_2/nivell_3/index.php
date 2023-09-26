<?php

function erastotenes($numEntry){
    $numsArray = [2];

    if ($numEntry % $numEntry === 0 && $numEntry < 2) {
        echo "El número debe ser mayor de 2";
    } else {
        $i = 3;
        for ($i = 3; $i <= $numEntry; $i += 2) {
            if (isPrime($i)) {
                array_push($numsArray, $i);
            }
        }
        
        return var_dump($numsArray);
    }
}

function isPrime($num){
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo erastotenes(100);


?>
