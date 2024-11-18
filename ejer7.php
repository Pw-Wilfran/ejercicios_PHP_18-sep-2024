<?php
function marcoDePalabras($texto) {
    $palabras = [];
    $palabraActual = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] === " ") {
            if ($palabraActual !== "") {
                $palabras[] = $palabraActual;
                $palabraActual = "";
            }
        } else {
            $palabraActual .= $texto[$i];
        }
    }

    if ($palabraActual !== "") {
        $palabras[] = $palabraActual;
    }

    $longitudMax = 0;
    for ($i = 0; $i < count($palabras); $i++) {
        if (strlen($palabras[$i]) > $longitudMax) {
            $longitudMax = strlen($palabras[$i]);
        }
    }

    for ($i = 0; $i < $longitudMax + 4; $i++) {
        echo "*";
    }
    echo "<br>";

    for ($i = 0; $i < count($palabras); $i++) {
        echo "* " . $palabras[$i];

        for ($j = strlen($palabras[$i]); $j < $longitudMax; $j++) {
            echo " ";
        }

        echo " *<br>";
    }

    for ($i = 0; $i < $longitudMax + 4; $i++) {
        echo "*";
    }
    echo "<br>";
}

marcoDePalabras("ALL WE NEED IS LOVE");
?>