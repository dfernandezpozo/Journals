<?php

// Para verificar si tiene minúsculas se usa ctype_lower
function checkLowerCase()
{

    $word = "queso";

    if (ctype_lower($word)) {
        echo "contiene solo letras minúsculas";
    } else {
        echo "no tiene solo minúsculas";
    }
}

checkLowerCase();
