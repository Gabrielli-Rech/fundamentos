<?php
function contar_pares($inicio, $fim) {
    if ($inicio >= $fim || $inicio < 0 || $fim < 0) {
        return "Os valores devem ser inteiros positivos e o primeiro menor que o segundo.";
    }

    $contador = 0;
    for ($num = $inicio + 1; $num < $fim; $num++) {
        if ($num % 2 == 0) {
            $contador++;
        }
    }

    return $contador;
}

// Exemplo de uso
echo contar_pares(3, 10); // Saída: 3 (4, 6, 8)
?>
