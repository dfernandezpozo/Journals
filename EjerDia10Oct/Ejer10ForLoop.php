<?php

$fila = 10;
$columna = 10;

$matriz = [];

for ($i = 1; $i <= $fila; $i++) {

    for ($j = 1; $j <= $columna; $j++) {

        $matriz[$i][$j] = $i * $j;
    }
}

print_r($matriz);
