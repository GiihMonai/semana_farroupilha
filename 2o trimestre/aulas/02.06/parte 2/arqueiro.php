<?php
require_once 'personagem.php';

class Arqueiro extends Personagem {
    public function atacar() {
        echo "🏹 {$this->getClasse()} atacou com flechas<br><br>";
    }
}