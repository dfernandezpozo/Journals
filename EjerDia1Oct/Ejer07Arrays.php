<?php

$original=array(1,2,3,4,5);

array_splice($original,3,0,"$");
foreach ($original as $origi => $numbers) {

    echo $numbers;
    
}


?>