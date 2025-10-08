<?php
// strlen para recorrer palabras
function reverseChain()
{

    $word = "papasito";

    for ($i = strlen($word) - 1; $i >= 0; $i--) {

        echo $word[$i];
    }
}

reverseChain();
