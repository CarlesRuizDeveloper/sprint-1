<?php

function nkowDivision($note) {
    if ($note < 33) {
        return "Està reprovat";
    } elseif ($note <= 44) {
        return "Tercera Divisió.";
    } elseif ($note <= 59) {
        return "Segona Divisió.";
    } else {
        return "Primera Divisió.";
    }
}
?>
