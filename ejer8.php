<?php
function obtenerValores($url) {
    $valores = [];
    $enParametros = false;
    $parActual = "";
    $valor = "";

    for ($i = 0; $i < strlen($url); $i++) {
        if ($url[$i] === "?") {
            $enParametros = true;
            continue;
        }
        if ($enParametros) {
            if ($url[$i] === "&") {
                $valores[] = $valor;
                $parActual = "";
                $valor = "";
                continue;
            }
            if ($url[$i] === "=") {
                $valor = "";
                continue;
            }
            if ($valor !== "" || $parActual === "") {
                $valor .= $url[$i];
            }
        }
    }
    if ($valor !== "") {
        $valores[] = $valor;
    }

    return $valores;
}
$url = "https://retosdeprogramacion.com?year=2024&challenge=19";
$valores = obtenerValores($url);
print_r($valores);
?>
