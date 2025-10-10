<?php

$filas = 8;
$columnas = 8;
$matriz = [];

for ($i = 0; $i < $filas; $i++) {

    for ($j = 0; $j < $columnas; $j++) {

        if (($i + $j) % 2 == 0) {
            echo $matriz[$i][$j] = "Blanco";
        } else {
            echo $matriz[$i][$j] = "Negro";
        }
    }
}

print_r($matriz);
