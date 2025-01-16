<?php

$edades = [18, 22, 40, 34];

//count 
echo count($edades);

// array _push - permite añadir algo al final del arreglo
array_push($edades, 13);

// inspecciona el contenido de un arreglo
var_dump($edades);

// is_array - para ver si una variable o array ( boolean)
$estoNoEsUnArreglo = "";

//explode -transforma en arreglo -array
$lista_de_frutas = "fresas,cereza,manzana";
//el separador será la coma , 
$lista_de_frutas_array = explode(",",$lista_de_frutas);

//implode - transforma en string un arreglo -array
$lista_de_frutas_array = ["fresas","cereza","manzana"];
//concateno por comas
$lista_de_frutas = implode(",",$lista_de_frutas_array);
var_dump($lista_de_frutas_array);
//resultado : 
//string(20) "fresa,cereza,manzana"

echo "\n";
