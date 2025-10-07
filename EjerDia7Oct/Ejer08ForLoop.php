<?php

$operacion;
for ($i = 1; $i <= 6; $i++) {

    for ($j = 1; $j <= 6; $j++) {

        $operacion = $i * $j;

        echo $i . "*" . $j . "=" . $operacion . "\n";
    }
}
