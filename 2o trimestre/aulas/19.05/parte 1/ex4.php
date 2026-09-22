<?php
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.<br>";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Cachinhos";
$pessoa1->idade = 16;

$pessoa2 = new Pessoa();
$pessoa2->nome = "Ely";
$pessoa2->idade = 16;

$pessoa3 = new Pessoa();
$pessoa3->nome = "Ninja";
$pessoa3->idade = 29;

$pessoa1->apresentar();
$pessoa2->apresentar();
$pessoa3->apresentar();
?>