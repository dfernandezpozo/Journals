<?php

$json='
{"Título": "El canto de los cucos",
"Autor": "Robert Galbraith",
"Detalle": {
    "Editorial": "Little Brown"
}}';
$data = json_decode($json, true);
echo "Titulo: ". $data["Título"]."\n";
echo "Autor: " .$data["Autor"]."\n";
echo "Detalle: " .$data["Detalle"]["Editorial"];
?>