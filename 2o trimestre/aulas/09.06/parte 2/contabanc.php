<?php
class ContaBancaria {
    private $numeroConta;
    private $titular;
    private $saldo;

    public function __construct($numeroConta, $titular, $saldoInicial) {
        $this->numeroConta = $numeroConta;
        $this->titular = $titular;
        $this->saldo = ($saldoInicial >= 0) ? $saldoInicial : 0;
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function aplicarOperacaoMensal() {
        return false; 
    }
}
?>