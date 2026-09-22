<?php
require_once 'animal.php';

class Cachorro extends Animal {
    public float $peso;
    public string $temperamento;
    public string $corDoPelo;

    public function __construct($proprietario, $nome, $idade, $raca, $pedigree, $peso, $temperamento, $corDoPelo) {
        parent::__construct($proprietario, $nome, $idade, $raca, $pedigree);
        $this->peso = $peso;
        $this->temperamento = $temperamento;
        $this->corDoPelo = $corDoPelo;
    }

    public function getTipo(): string {
        return "Cachorro";
    }
}