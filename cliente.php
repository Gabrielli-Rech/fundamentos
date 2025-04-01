<?php

// Inclui o arquivo que contém a classe Pessoa
require_once 'pessoas.php';

// Definição da classe Cliente, que herda da classe Pessoa
class Cliente extends pessoas {
    protected $saldo;

    // Construtor
    public function __construct($nome, $idade, $saldo) {
        parent::__construct($nome, $idade);
        $this->saldo = $saldo;
    }

    // Método para exibir informações do cliente
    public function exibirInformacoesCliente() {
        parent::exibirInformacoes();
        echo "Saldo: $" . $this->saldo . "<br>";
    }
}

?>