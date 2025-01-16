<?php

// usort - ordena un valor. 
// creamos una función para indicarle como ordernarlo.
//modifica el arreglo, no creo uno nuevo

$precios_de_cafes = [ 12, 56, 32, 89, 2, 1];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b; //operador nave espacial <=>
});

var_dump($precios_de_cafes);

// resultado 
// array(6){
//     [0]=>
//     int(1)
//     [1]=>
//     int(2)
//     ..... y así en adelante.. ordena de menor a mayor
// }