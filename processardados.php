<?php

require_once 'Cliente.php';

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $saldo = $_POST["saldo"];

    // Instancia um objeto Cliente com os dados recebidos
    $cliente = new Cliente($nome, $idade, $saldo);

    // Exibe as informações do cliente
    echo "<h2>Informações do Cliente</h2>";
    $cliente->exibirInformacoesCliente();
}

?>