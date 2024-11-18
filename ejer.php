<?php
function calcularArea($tipo, $lado = 0, $base = 0, $altura = 0) {
    if ($tipo == 'triangulo') {
        return ($base * $altura) / 2;
    } elseif ($tipo == 'cuadrado') {
        return $lado * $lado;
    } elseif ($tipo == 'rectangulo') {
        return $base * $altura;
    } else {
        return "Tipo de polígono no encontrado";
    }
}
echo "Área del triángulo: " . calcularArea('triangulo', 0, 10, 5) . "<br>";
echo "Área del cuadrado: " . calcularArea('cuadrado', 4) . "<br>";
echo "Área del rectángulo: " . calcularArea('rectangulo', 0, 8, 6) . "<br>";
?>