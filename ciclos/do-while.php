<?php

$usernames = ["pepito123", "Mr.Michi", "RetaxMain"];

do
{
    $username = readline("Por favor ingresa tu nuevo nombre");

}
while(in_array($username, $usernames));

//En este caso pedirá el nombre siempre que los que ingresemos
//diferentes a los que hay en el array.