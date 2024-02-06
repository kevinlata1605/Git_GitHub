<?php

$cantidad = 12;
$precio = 700;
$total = $precio * $cantidad;
$percentage = 0;

if ($cantidad < 5) {
    $percentage = ($total * 0.10);
    $total = $total - $percentage;
} elseif (($cantidad >= 5) && ($cantidad < 10)) {
    $percentage = ($total * 0.20);
    $total = $total - $percentage;
} elseif ($cantidad >= 10) {
    $percentage = ($total * 0.40);
    $total = $total - $percentage;
} else {
    echo "ERROR!";
    die();
}
$percentage = ($percentage / 100);
echo "El total a pagar es: $ {$total}";