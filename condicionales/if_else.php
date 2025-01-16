<?php

$asientos_disponibles = 4;
$es_hijo_de_tom_holland = true;

if ($asientos_disponibles>0)
    echo "Puedes ver la pelicula";
else if($es_hijo_de_tom_holland == true)
    echo "No te creo pero puedes ver la pelicula";
else
    echo "No puedes verla, no hay asientos";
echo "\n";