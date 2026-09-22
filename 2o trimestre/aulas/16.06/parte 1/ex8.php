<?php
abstract class Loteria {
    protected int $maximo;

    public function sorteiaNumero(): int {
        return rand(1, $this->maximo);
    }
}

class MegaSena extends Loteria {
    public function __construct() {
        $this->maximo = 60;
    }
}

class Quina extends Loteria {
    public function __construct() {
        $this->maximo = 80;
    }
}