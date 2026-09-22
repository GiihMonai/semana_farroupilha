<?php
require_once 'personagem.php';

class Guerreiro extends Personagem {
    public function atacar() {
        echo "⚔️ {$this->getClasse()} atacou com espada<br><br>";
    }
}