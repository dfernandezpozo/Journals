<?php

function ordenarArray()
{

    $array = [4, 2, 9, 1, 12, 22, 13, 7];

    $ordenado = sort($array);

    foreach ($array as $ordenar => $ordenado) {

        echo  $ordenado . "\n";
    }
}

ordenarArray();
