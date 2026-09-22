<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        return "oiiiiii, meu nome é " . $this->nome;
    }
}

class Estudante extends Pessoa {
    public $escola;

    public function __construct($nome, $idade, $escola) {
        parent::__construct($nome, $idade);
        $this->escola = $escola;
    }
}

$estudante = new Estudante("Cachinhos", 16, "IFRS");

echo $estudante->apresentar() . "<br>";
echo "Idade: " . $estudante->idade . " anos<br>";
echo "Escola: " . $estudante->escola . "<br>";
?>