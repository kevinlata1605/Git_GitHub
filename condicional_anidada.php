<?php

$edad=55;
$genero= 'F';

if ($genero=='M') {
    if ($edad>=60) {
        echo "Usted puede jubilarse";
    } else {
        echo "Usted aun no puede jubilarse";
    }
    
} elseif ($genero=='F'){
    if ($edad>=54) {
        echo "Usted puede jubilarse";
    } else {
        echo "Usted aun no puede jubilarse";
    }
} else {
    echo "Ingrese una opcion valida";
}

