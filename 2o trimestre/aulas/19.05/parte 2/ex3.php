<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.<br>";
    }
}

$pessoa1 = new Pessoa("Cachinhos", 16);
$pessoa2 = new Pessoa("Ely", 16);

$pessoa1->apresentar();
$pessoa2->apresentar();
?>