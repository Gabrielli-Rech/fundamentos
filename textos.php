<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão de textos</title>
</head>
<body>
    <?php
    /*
    echo - Exibe uma ou mais strings.
    echo não é uma função atualmete 
    (contrutor da linguagem), então 
    não é obrigado usar parênteses
    */

    echo "Exibe uma ou mais strings.
    echo não é uma função atualmete 
    (contrutor da linguagem), então 
    não é obrigado usar parênteses \n";

    $s = "Teste de impressão utilizando
    variável";

    echo $s;
    echo "<br> $s";
    echo "<br><br>";

    /*
    print - Exibe uma ou mais strings.
    As principais diferenças para o echo
    são os que o print recebe apenas um argumento.
    */

    print "Mensagem utilizando o print <br>";

    // printf - Mostra uma string formatada

    printf ("Mostra uma string formatada");

    $n = 15;

    printf ("<br>Mostra o valor formatado em decimal<br>");

    printf ("<p>variável n = %d </p> ",$n);

    printf ("<p>variável n = %08d </p> ",$n);

    $d = 10.10;

    printf ("<p>variável d = %2f </p> ",$d);

    printf("<br><br>");

    printf("Trabalhando com valores boleanos");

    $b = true;

    $f = false;

    echo "<p>True = $b</p>";

    echo "<p>False = $f</p>";

    echo "<br><br>";

    echo "Função var-dump - Mostra informações 
            sobre uma variável";

    var_dump($b);
    var_dump($f);
    var_dump($d);
    var_dump($n);

    ?>

</body>
</html>