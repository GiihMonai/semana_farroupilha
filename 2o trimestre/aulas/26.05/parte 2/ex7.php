<?php
class Pessoa {
    public $nome; 

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function apresentar() {
        return "oiiiiiiiiii, meu nome é " . $this->nome;
    }
}

class Aluno extends Pessoa { 
    public $escola;

    public function __construct($nome, $escola) {
        parent::__construct($nome);
        $this->escola = $escola;
    }

    public function apresentar() {
        return parent::apresentar() . " eu ixtudu na escola " . $this->escola; 
    }
}

$aluno = new Aluno("Cachinhos", "IFRS"); 

echo $aluno->apresentar() . "<br>";
?>