<?php
$cantidad = 2;
$precio = 10;
$total = $cantidad * $precio;
$total = ($cantidad >= 3) ? $total - ($total * 0.20) : $total - ($total * 0.10);
echo "El total a pagar ese de: $" . $total;
