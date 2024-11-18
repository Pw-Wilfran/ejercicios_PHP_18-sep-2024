<?php
function convertirAMilisegundos($dias, $horas, $minutos, $segundos) {
    $msdias = $dias * 24 * 60 * 60 * 1000;
    $mshoras = $horas * 60 * 60 * 1000;
    $msminutos = $minutos * 60 * 1000;
    $mssegundos = $segundos * 1000;

    return [
        "dias" => $msdias,
        "horas" => $mshoras,
        "minutos" => $msminutos,
        "segundos" => $mssegundos,
    ];
}

$dias = 1;
$horas = 2;
$minutos = 30;
$segundos = 45;

$resultados = convertirAMilisegundos($dias, $horas, $minutos, $segundos);

echo "Milisegundos por días: " . $resultados["dias"] . " ms<br>";
echo "Milisegundos por horas: " . $resultados["horas"] . " ms<br>";
echo "Milisegundos por minutos: " . $resultados["minutos"] . " ms<br>";
echo "Milisegundos por segundos: " . $resultados["segundos"] . " ms<br>";
?>
