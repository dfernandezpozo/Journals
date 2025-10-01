<?php

  $ceu = array( "Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=>"Bruselas", "Dinamarca"=>"Copenhague", "Finlandia"=>"Helsinki", "Francia"=>"París", "Eslovaquia"=>"Bratislava", "Eslovenia"=>"Liubliana", "Alemania"=>"Berlín", "Grecia"=>"Atenas", "Irlanda"=>"Dublín", "Países Bajos"=>"Ámsterdam", "Portugal"=>"Lisboa", "España"=>"Madrid", "Suecia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicosia", "Lituania"=>"Vilna", "República Checa"=>"Praga", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Letonia"=>"Riga", "Malta"=>"La Valeta", "Austria" => "Viena", "Polonia"=>"Varsovia") ;
  
  //Usar foreach para recorrer Arrays y matrices es lo  más cómodo

  foreach ($ceu as $country=>$name) {
    
    echo "La capital de ".$country  . " es " .  $name . "\n";
  }

  
?>