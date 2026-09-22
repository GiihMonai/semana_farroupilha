<?php
class Personagem {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function atacar() {
        return "Atacou!";
    }
}

class Guerreiro extends Personagem {
    public function atacar() {
        return "{$this->nome} ataca com espada!";
    }
}

class Mago extends Personagem { 
    public function atacar() {
        return "{$this->nome} lança magia!"; 
    }
}

$guerreiro = new Guerreiro("He-Man");
$mago = new Mago("Gorpo");

echo $guerreiro->atacar() . "<br>";
echo $mago->atacar() . "<br>";
?>