<?php

//A) ordenar por valor ascendente

// $people=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// $ordenado=sort($people);
// foreach ($people as $ordenados) {
    
// echo $ordenados ."\n";
// }

//B) Ordenar por clave ascendente (El asort hace que no se pierda el valor de Sophia etc)

// $people=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// $ordenado=asort($people);
// foreach ($people as $key=>$value) {
    
// echo $key ."\n";
// }

//C) ordenar por valor descendente

//  $people=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
//  $ordenado=ksort($people);
//  foreach ($people as $ordenados) {
    
//  echo $ordenados ."\n";
//  }

//D) ordenar por clave descendente

  $people=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
  $ordenado=krsort($people);
  foreach ($people as $ordenados=>$key) {
    
  echo $ordenados ."\n";
  }



?>