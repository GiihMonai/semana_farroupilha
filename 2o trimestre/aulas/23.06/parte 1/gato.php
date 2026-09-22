<?php
require_once 'animal.php';

class Gato extends Animal {
    public string $corDoPelo;
    public string $corDosOlhos;

    public function __construct($proprietario, $nome, $idade, $raca, $pedigree, $corDoPelo, $corDosOlhos) {
        parent::__construct($proprietario, $nome, $idade, $raca, $pedigree);
        $this->corDoPelo = $corDoPelo;
        $this->corDosOlhos = $corDosOlhos;
    }

    public function getTipo(): string {
        return "Gato";
    }
}