<?php

$frase="w3resource";
$subcadena="r";
$contador=0;

// El strlen es como el length
for($i=0;$i<strlen($frase);$i++){

    // Substr coge la frase , la variable del bucle y los carácteres que quieres
    // Extraer desde esa posición(1).

    if(substr($frase,$i,1)==$subcadena){
        $contador++;
    }
}

echo "La letra r aparece " . $contador . " veces";

?>