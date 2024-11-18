<?php

$texto = "Buenos Dias";

$textoInvertido = "";

for ($i = strlen($texto) - 1; $i >= 0; $i--) {
    $textoInvertido .= $texto[$i];
}

echo "Texto original: $texto<br>";
echo "Texto invertido: $textoInvertido<br>";
?>
