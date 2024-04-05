<?php
$numero_correto = rand(1, 100);

while (true) {

    $numero_Esc = (int) readline("Adivinhe o número (entre 1 e 100): ");


    if ($numero_Esc === $numero_correto) {
        echo "Você acertou o número!\n";

    } else {

        if (abs($numero_Esc - $numero_correto) <= 10) {
            echo "Perto\n";
        } else {
            echo "Maior\n";
        }
    }
}
?>
