<?php

// Mayor de edad
/* $edad=20;
if ($edad >= 18){
    echo "Usted es mayor de edad";
}*/

//Almacen 20%
$total = 120;
if ($total > 100) {
    $total = ($total - ($total * 0.20));
}
echo "El total a pagar es de: $" . $total;
