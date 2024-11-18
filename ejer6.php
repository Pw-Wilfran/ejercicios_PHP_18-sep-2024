<?php
function figuras($tipo, $ancho, $alto = null) {
    if ($alto === null) {
        $alto = $ancho;
    }

    if ($tipo === "cuadrado") {
        for ($i = 0; $i < $ancho; $i++) {
            for ($j = 0; $j < $ancho; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    if ($tipo === "rectangulo") {
        for ($i = 0; $i < $alto; $i++) {
            for ($j = 0; $j < $ancho; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    if ($tipo === "triangulo") {
        for ($i = 1; $i <= $ancho; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}
echo "Cuadrado:<br>";
figuras("cuadrado", 5);

echo "Rectángulo:<br>";
figuras("rectangulo", 5, 3);

echo "Triángulo:<br>";
figuras("triangulo", 5);
?>
