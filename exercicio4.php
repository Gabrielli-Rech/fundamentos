<?php
function media_pares($inicio, $fim) {
    if ($inicio >= $fim || $inicio < 0 || $fim < 0) {
        return "Os valores devem ser inteiros positivos e o primeiro menor que o segundo.";
    }

    $soma = 0;
    $contador = 0;

    for ($num = $inicio + 1; $num < $fim; $num++) {
        if ($num % 2 == 0) {
            $soma += $num;
            $contador++;
        }
    }

    if ($contador == 0) {
        return "Não há números pares no intervalo.";
    }

    return $soma / $contador;
}

// Exemplo de uso
echo media_pares(3, 10); // Saída: 6 (Média de 4, 6, 8)
?>
