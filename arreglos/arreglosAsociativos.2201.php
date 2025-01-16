<?php

$cafes = array(
    "Capuccino" =>50,
    "Latte" => 49,
    "Americano " => 70

);

echo "El precio del cafe Americano es de {$cafes['Americano']}";

echo "\n";

$personas = array(

    "Carlos" => array(
        "edad" => 20, 
        "apellido" => "Santana"
    ),
    "Marcos" => array(
        "edad" => 22, 
        "apellido" => "García"
    ),
);

echo "La información de Marcos es: Edad: "  .$personas["Marcos"]["edad"]. "Apellido: "
.$personas["Marcos"]["edad"];

echo "\n";



?>