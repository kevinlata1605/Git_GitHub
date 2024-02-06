<?php
$texto="Ecuador";
$variable_1=$texto;
$variable_2=&$texto;

echo $variable_2;

$texto="Kevin Lata";

echo $variable_2;