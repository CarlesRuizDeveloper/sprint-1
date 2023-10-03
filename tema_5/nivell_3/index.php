<?php
require ('Class_Shape.php');
$salir = false;
do {
    $num =1;
    switch (menu()) {
    case 1:
        $triangle = new Triangle();
        echo "L'àrea del triangle és: " . $triangle->area()."\n";
        break;
    case 2:
        $rectangle = new Rectangle();
        echo "L'àrea del rectangle és: " . $rectangle->area()."\n";
        break;
    case 3:
        $cercle = new circle();
        echo "L'àrea del cercle és: " . $cercle->area()."\n";
        break;
    case 0:
        $salir = true;
        break;
    }
} while (!$salir);


function  menu() {
    $opcio =" ";
    $MINIMO = 0;
    $MAXIMO = 3;

    do {
        echo ("\n************ MENú PRINCIPAL ************ \n \n");
        echo ("1. Calcula l'àrea d'un triangle \n");
        echo ("2. Calcula l'àrea d'un rectangle \n");
        echo ("3. Calcula l'àrea d'un cercle \n");
        echo ("0. Sortir del programa. \n \n");
        $opcio = intval(readline("Escull una opció: \n"));
        if ($opcio < $MINIMO || $opcio > $MAXIMO) {
            echo("Opció no vàlida \n");
        }
    } while ($opcio < $MINIMO || $opcio > $MAXIMO );
    return $opcio;
}