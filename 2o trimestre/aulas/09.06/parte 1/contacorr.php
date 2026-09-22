<?php
require_once 'contabanc.php';

class ContaCorrente extends ContaBancaria {
    
    public function aplicarOperacaoMensal() {
        $tarifa = 10.00;
        if ($this->getSaldo() >= $tarifa) {
            $this->setSaldo($this->getSaldo() - $tarifa);
            return true;
        }
        return false;
    }
}
?>