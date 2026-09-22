<?php
class Celular {
    private $marca;
    private $modelo;
    private $bateria;

    public function setMarca($marca) { $this->marca = $marca; }
    public function getMarca() { return $this->marca; }

    public function setModelo($modelo) { $this->modelo = $modelo; }
    public function getModelo() { return $this->modelo; }

    public function setBateria($bateria) {
        if ($bateria >= 0 && $bateria <= 100) {
            $this->bateria = $bateria;
        } else {
            echo "Porcentagem de bateria inválida!<br>";
        }
    }

    public function getBateria() {
        return $this->bateria;
    }
}

$cel = new Celular();
$cel->setMarca("Oppo");
$cel->setModelo("A58");

echo "Testando valor inválido (150%):<br>";
$cel->setBateria(150);

echo "<br>Testando valor válido (75%):<br>";
$cel->setBateria(75);
echo "Celular: " . $cel->getMarca() . " " . $cel->getModelo() . " | Bateria: " . $cel->getBateria() . "%<br>";
?>