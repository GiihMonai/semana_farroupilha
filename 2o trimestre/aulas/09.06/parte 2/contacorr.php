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


//fiz os códigos sozinha dessa fez (Gisely), os dois outros ficaram jogando durante a aula :[