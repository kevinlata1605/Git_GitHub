<?php

$cadena_texto = "hola mundo php";

$longitud = strlen($cadena_texto);
echo $cadena_texto . " tiene: " . $longitud . " caracteres"; 
echo "<br>";

$palabras = str_word_count($cadena_texto);
echo $cadena_texto . " tiene: " . $palabras . " caracteres"; 
