<?php
class Celular {
    public $marca;
    public $modelo;
    public $bateria;

    public function mostrarInformacoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Bateria: " . $this->bateria . "%<br>";
    }
}

$meuCelular = new Celular();

$meuCelular->marca = "Oppo";
$meuCelular->modelo = "A58";
$meuCelular->bateria = 35;

$meuCelular->mostrarInformacoes();
?>