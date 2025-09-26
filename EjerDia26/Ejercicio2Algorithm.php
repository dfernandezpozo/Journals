<?php

$mainNumber=51;
echo("Dime un número");
$number =   fgets(STDIN);

$operation = $number-$mainNumber;

if($operation <0){

    $operation=$mainNumber-$number;

    echo("El número absoluto es: " . $operation);
}
else{

    echo("El número absoluto es: " . $operation*3);

}






?>