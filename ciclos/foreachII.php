<?php

use Symfony\Config\Doctrine\Orm\EntityManagerConfig\ResultCacheDriverConfig;

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25, 
    "Recalentado" => 10,
    "Capuccino" => 27.5, 
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $precio) 
{

    echo "actualmente encontré al cafe $cafe \n";
    if ($cafe == "Latte") 
    {
        echo "Encontramos a Latte";
        break;
    }
}

echo "\n";
// resultado 
// Actualmente encontré al café Americano
// Actualmente encontré al café Latte
// Encontramos a Latte


foreach ($tiendita_de_cafes as $cafe => $precio) 
{
    if ($cafe == "Recalentado") 
    {   //va a saltarse al siguiente ciclo
        continue;
    }
    echo "El cafe $cafe es muy rico \n";
}
// Resultado:
// El café americano es muy rico 
// el cafe latte es muy rico 
// el cafe capuccino es muy rico 
// el cafe mocca es muy rico
