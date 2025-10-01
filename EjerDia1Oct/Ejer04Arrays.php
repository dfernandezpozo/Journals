<?php

$x = array(1, 2, 3, 4, 5);
  
 //Para borrar un elemento del array como en este caso usamos el splice
 array_splice($x,1,1);

  foreach ($x as $xy) {

   
    
    echo  $xy;
  }

  

?>