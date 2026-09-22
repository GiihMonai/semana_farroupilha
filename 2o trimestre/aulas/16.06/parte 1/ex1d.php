<?php
class Conta {
    private $numero;
    private $banco;
    private $saldo;

    public function depositar($valor): void {
        $this->saldo += $valor;
    }
    
    public function sacar($valor): void {
        $this->saldo -= $valor;
    }
}
