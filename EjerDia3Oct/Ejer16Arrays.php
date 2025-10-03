<?php

//Hay que sacar solo el valor con array_values para luego
//hacer el max

$array=array("Pepe"=>1,"Juan"=>2,"Luis"=>3);
$values= array_values($array);
$valorMax=max($values);


echo $valorMax;


?>