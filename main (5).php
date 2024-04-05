<?php 
function fibonacci($n = 1) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Imprimindo os primeiros 10 números da sequência de Fibonacci
for ($i = 0 ; $i < 10; $i++) {
    echo fibonacci($i) . "\n";
}
?>