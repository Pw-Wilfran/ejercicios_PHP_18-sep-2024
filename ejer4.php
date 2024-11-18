<?php
function armstrong($numero) {
    $numeroOriginal = $numero;
    $suma = 0;
    $cantidadDigitos = 0;

    $temp = $numero;
    while ($temp > 0) {
        $cantidadDigitos++;
        $temp = (int)($temp / 10);
    }

    $temp = $numero;
    while ($temp > 0) {
        $digito = $temp % 10;
        $temp = (int)($temp / 10);

        $potencia = 1;
        for ($i = 0; $i < $cantidadDigitos; $i++) {
            $potencia *= $digito;
        }

        $suma += $potencia;
    }

    return $suma === $numeroOriginal;
}

$numero = 371;
if (armstrong($numero)) {
    echo "$numero es un número de Armstrong.<br>";
} else {
    echo "$numero no es un número de Armstrong.<br>";
}
?>

