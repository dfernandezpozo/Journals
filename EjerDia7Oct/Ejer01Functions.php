<?php

echo "Dime un numero y te haré su factorial";
$response = fgets(STDIN);
$ini = 1;
$total = 1;
for ($i = $response; $i >= $ini; $i--) {

    $total *= $i;
}

echo "El factorial de " . $response . " es:" . $total;
