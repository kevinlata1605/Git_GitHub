<?php
#Array de tipo escalar
$estudiantes = ["Kevin", "Cesar", "Noemy", "Yolanda", 16];


#Array de tipo asociativo
$tutor = [
    "nombre" => "Kevin",
    "apellido" => "Lata",
    "edad" => 24
];

#Array de tipo multiples dimensiones
$tutor_2 = [
    "nombre" => "Kevin",
    "apellido" => "Lata",
    "edad" => 24,
    "cursos" => ["primero" => "PHP", "segundo" => "Python", "tercero" => "CSS"]
];

echo count($tutor_2,COUNT_RECURSIVE);
