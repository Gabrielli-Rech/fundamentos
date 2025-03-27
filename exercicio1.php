<?php

// Definição das cotações como constantes

    define ("d", 5.725);
    define ("p", 180.7660);
    define ("l", 7.42);
    define ("e", 6.20);
    define ("i", 0.0380);

        $valor = 10;

    echo "<br><br>";
    echo "Valor do Dólar $ " .$valor/d;
    echo "<br><br>";
    echo "Valor do Peso Argentino ₽ " .$valor/p;
    echo "<br><br>";
    echo "Valor do Libras ₤ " .$valor/l;
    echo "<br><br>";
    echo "Valor do Euro € " .$valor/e;
    echo "<br><br>";
    echo "Valor do Iene ¥ " .$valor/i;
    echo "<br><br>";