<!-- foreach($iterable as $valor
{
    //codigo a repetir por cada valor
} -->

<!-- foreach($iterable as $llave => $valor )
{
    //codigo a repetir por cada valor
} -->

<?php

//array asociativo
$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25, 
    "Capuccino" => 27.5, 
    "Mocca" => 24
);
//queremos recorrer sus precios
//foreach ($tiendita_de_cafes as $price)
// subindices
foreach ($tiendita_de_cafes as $cafe =>$price)

{
    echo "El café $cafe en cuestión cuesta $price USD \n";
}

echo "\n";
// Resultado 
// El café Americano en cuestión cuesta 20 USD
// El café Latte en cuestión cuesta 25  USD
// El café Capuccino en cuestión cuesta 27.5 USD
// El café Mocca en cuestión cuesta 24 USD
