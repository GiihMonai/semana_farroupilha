<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getTitular() {
        return $this->titular;
    }
}

$conta = new ContaBancaria("Guilherme Menegotto", 40000.00);

$conta->setTitular("Guilherme M. Menegotto");
echo "Titular atualizado: " . $conta->getTitular() . "<br>";
echo "Saldo: R$ " . $conta->getSaldo() . "<br>";
?>