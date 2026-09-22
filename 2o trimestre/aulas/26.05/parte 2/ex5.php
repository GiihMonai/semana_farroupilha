<?php
class Veiculo {
    public function mover() {
        return "ta indo ai ó";
    }
}

class Carro extends Veiculo {
    public function mover() {
        return "Carro faz vrum vrummmmmmmmmmmmmm"; 
    }
}

class Moto extends Veiculo { 
    public function mover() {
        return "Moto faz ratatatatattatatatattatat"; 
    }
}

class Aviao extends Veiculo {
    public function mover() {
        return "Avião faz vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv";
    }
}

$veiculos = [new Carro(), new Moto(), new Aviao()];

foreach ($veiculos as $v) {
    echo $v->mover() . "<br>";
}
?>