<?php
/*
$c=1;
while ($c <= 20) {
    echo $c ."<br>";
    if ($c==10) {
        break;
    }
    $c++;
}
*/
/*
$pc = ["SD", "SSD", "GPU", "RAM", "CPU"];
foreach ($pc as $componente) {
    if ($componente == "GPU") {
       continue;
    }
    echo $componente . "<br>";
}
*/

 for ($i=1; $i <= 10; $i++) { 
    if ($i==5) {
        continue;
    }
    echo $i."<br>";
 }