<?php
    $nome = $_POST ['nome'];
    $idade = $_POST ['idade'];
    $cpf = $_POST ['cpf'];
    $estado = $_POST ['estado'];

    echo "Dados enviados com sucesso! <br>";
    echo "Seja bem-vindo sr(a) $nome, ";
    echo "sua idade é $idade anos, ";
    echo "seu CPF é $cpf, ";
    echo "seu estado é $estado.";
?>