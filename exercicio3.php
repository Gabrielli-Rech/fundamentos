<?php
function soma_pares($inicio, $fim) {
    if ($inicio >= $fim || $inicio < 0 || $fim < 0) {
        return "Os valores devem ser inteiros positivos e o primeiro menor que o segundo.";
    }

    $soma = 0;
    for ($num = $inicio + 1; $num < $fim; $num++) {
        if ($num % 2 == 0) {
            $soma += $num;
        }
    }

    return $soma;
}

// Exemplo de uso
echo soma_pares(3, 10); // Saída: 18 (4 + 6 + 8)
?>
