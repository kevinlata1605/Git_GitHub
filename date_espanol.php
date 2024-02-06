<?php
date_default_timezone_set("America/Lima");

function fecha_espanol_larga()
{
    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_anio = date("Y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"
    ];

    $meses_anio = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $fecha_final = $dia_semana[date("l")] . " " . $fecha_dia . " de " . $meses_anio[$fecha_mes] . " del " . $fecha_anio;
    return $fecha_final;
}
echo fecha_espanol_larga();
echo "<br>";
function fecha_espanol_corta($fecha = "")
{
    if ($fecha == "") {
        $fecha = date("d-m-Y");
    } else {
        $fecha = date("d-m-Y", strtotime($fecha));
    }

    $fecha = explode("-", $fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_anio = $fecha[2];

    $meses_anio = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $fecha_final = $fecha_dia . " de " . $meses_anio[$fecha_mes] . " del " . $fecha_anio;
    return $fecha_final;
}
echo fecha_espanol_corta("02-Mayo-2021");
