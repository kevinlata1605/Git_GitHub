<?php
/* TOTAL LLANTERA
$cantidad = 9;
$total = 0;
if ($cantidad >= 5) {
    $total = $cantidad * 700;
} else {
    $total = $cantidad * 800;
}
echo "El total a pagar es: $" . $total;
*/

//APRUEBA O REPRUEBA
$nota_1 = 7;
$nota_2 = 6;
$nota_3 = 5;

$promedio = ($nota_1 + $nota_2 + $nota_3) / 3;
if ($promedio >= 7) {
    echo "El estudiante aprobo con el promedio: " . $promedio;
} else {
    echo "El estudiante repró con el promedio: " . $promedio;
}
