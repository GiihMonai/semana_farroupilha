<?php
require_once 'animal.php';

class Passarinho extends Animal {
    public string $corDasAsas;
    public string $corDoCorpo;
    public string $asasCortadas;

    public function __construct($proprietario, $nome, $idade, $raca, $pedigree, $corDasAsas, $corDoCorpo, $asasCortadas) {
        parent::__construct($proprietario, $nome, $idade, $raca, $pedigree);
        $this->corDasAsas = $corDasAsas;
        $this->corDoCorpo = $corDoCorpo;
        $this->asasCortadas = $asasCortadas;
    }

    public function getTipo(): string {
        return "Passarinho";
    }
}