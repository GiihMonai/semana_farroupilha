<?php
require_once 'contabanc.php';

class ContaPoupanca extends ContaBancaria {

    public function aplicarOperacaoMensal() {
        $taxa = 0.05;
        $rendimento = $this->getSaldo() * $taxa;
        $this->setSaldo($this->getSaldo() + $rendimento);
        return $rendimento; 
    }
}
?>