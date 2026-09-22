<?php
class Pessoa {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Professor extends Pessoa { 
    public $disciplina;

    public function __construct($nome, $disciplina) {
        parent::__construct($nome);
        $this->disciplina = $disciplina;
    }
}

class Diretor extends Pessoa {
    public $setor; 

    public function __construct($nome, $setor) {
        parent::__construct($nome);
        $this->setor = $setor;
    }
}

$prof = new Professor("Jonathan", "Sociologia"); 
$dir = new Diretor("Edna", "Diretora"); 

echo "Professor: {$prof->nome} | Disciplina: {$prof->disciplina}<br>";
echo "Diretor: {$dir->nome} | Setor: {$dir->setor}<br>";
?>