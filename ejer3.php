<?php
function diferencias($str1, $str2) {
    $out1 = ""; 
    $out2 = ""; 

    for ($i = 0; $i < strlen($str1); $i++) {
        $encontrado = false;

        for ($j = 0; $j < strlen($str2); $j++) {
            if ($str1[$i] == $str2[$j]) {
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            $out1 .= $str1[$i];
        }
    }

    for ($i = 0; $i < strlen($str2); $i++) {
        $encontrado = false;

        for ($j = 0; $j < strlen($str1); $j++) {
            if ($str2[$i] == $str1[$j]) {
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            $out2 .= $str2[$i];
        }
    }

    echo "out1: $out1<br>";
    echo "out2: $out2<br>";
}
diferencias("wilfran ", "pilcue");
?>

