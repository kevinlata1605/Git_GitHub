<?php

/*
$a = 7;
$x = 10;
$y = 9;
$z = 7;

$resultado = match ($a) {
    $x => "Valor igual a X",
    $y => "Valor igual a Y",
    $z => "Valor igual a Z",
    default => "No coincide con ningun valor"
};
echo $resultado;
*/

$edad=18;
$resultado = match (true){
    $edad >= 60 => "Eres una persona de tercera edad",
    $edad >= 30 => "Eres una persona adulta",
    $edad >= 18 => "Eres una persona adulta joven",
    default => "Eres un niño"
};
echo $resultado;