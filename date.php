<?php

date_default_timezone_set("America/Lima");

$fecha_us = date("l d F Y");
$fecha_es = date("d-m-Y");

$hora_12 = date("h:i a");
$hora_24 = date("H:i a");

$fecha_completa= date("r");


echo $fecha_us;
echo "<br>";
echo $fecha_es;
echo "<br>";
echo $hora_12;
echo "<br>";
echo $hora_24;
echo "<br>";
echo$fecha_completa;