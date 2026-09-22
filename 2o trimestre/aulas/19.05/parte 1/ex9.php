<?php
class Carro {
    public $marca;
    public $modelo;
    public $velocidade;

    public function acelerar() {
        echo "Acelerando...<br>";
        $this->velocidade += 50;
        echo "Velocidade atual: " . $this->velocidade . " km/h<br>";
    }

    public function frear() {
        echo "Freando...<br>";
        $this->velocidade -= 15;
        if ($this->velocidade < 0) {
            $this->velocidade = 0;
        }
        echo "Velocidade atual: " . $this->velocidade . " km/h<br>";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Nissan";
$meuCarro->modelo = "Skyline GT-R R34";
$meuCarro->velocidade = 0;

echo "Velocidade inicial: " . $meuCarro->velocidade . " km/h<br><br>";

$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->frear();
?>