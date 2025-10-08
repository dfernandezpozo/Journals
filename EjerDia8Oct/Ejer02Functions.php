<?php
function primeNumber()
{
    $esPrimo = true;
    $num = 7;
    for ($i = 2; $i < $num - 1; $i++) {

        if ($num % 2 == 0) {
            $esPrimo = false;
            break;
        }
    }

    if ($esPrimo && $num > 1) {
        echo "El numero " . $num . " es primo";
    } else {
        echo  $num . " no es primo";
    }
}

primeNumber();
