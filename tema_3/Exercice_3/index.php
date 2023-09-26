<?php

function lookFor($lowerWords, $char){
    foreach ($lowerWords as $palabra) {
        if (strpos($palabra, $char) === false) {
            return false;
        }
    }
    return true;
}

$words = ["hola", "Php", "Html"];
$lowerWords = array_map('strtolower', $words);
$char = "x";

if (lookFor($words, $char)) {
    echo "Todas las palabras contienen el carácter '$char'.";
} else {
    echo "No todas las palabras contienen el carácter '$char'.";
}
?>