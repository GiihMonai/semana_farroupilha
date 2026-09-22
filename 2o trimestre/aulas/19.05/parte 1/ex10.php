<?php
class filminhoLegal {
    public $titulo;
    public $diretor;
    public $possuiPlotTwist;

    public function exibirDetalhes() {
        echo "Filme: <strong>" . $this->titulo . "</strong><br>";
        echo "Direção: " . $this->diretor . "<br>";
    }

    public function recomendar() {
        if ($this->possuiPlotTwist) {
            echo "recomendação: cuidado vc vai chora ou vai grita ou vai se dseperar e vai marca sua vida toda<br>";
        } else {
            echo "recomendação: é bão dimais da conta<br>";
        }
    }
}

$filme1 = new filminhoLegal();
$filme1->titulo = "Bolt - Supercão";
$filme1->diretor = "Byron Howard";
$filme1->possuiPlotTwist = true;

$filme1->exibirDetalhes();
$filme1->recomendar();

echo "<br>";

$filme2 = new filminhoLegal();
$filme2->titulo = "Kung Fu Panda 3";
$filme2->diretor = "Jennifer Yuh Nelson";
$filme2->possuiPlotTwist = true;

$filme2->exibirDetalhes();
$filme2->recomendar();
?>