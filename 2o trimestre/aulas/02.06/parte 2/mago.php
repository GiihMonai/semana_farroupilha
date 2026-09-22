<?php
require_once 'personagem.php';

class Mago extends Personagem {
    public function atacar() {
        echo "🔮 {$this->getClasse()} atacou com magia<br><br>";
    }
}