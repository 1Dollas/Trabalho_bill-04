<?php
function calcularIMC($peso, $altura) {
    if ($altura != 0) 
    {
        return $peso / ($altura * $altura);

    }
}

$peso = 79;
$altura = 1.82;

$imc = calcularIMC($peso, $altura);

echo "O seu IMC é: " . number_format($imc, 2);
?>