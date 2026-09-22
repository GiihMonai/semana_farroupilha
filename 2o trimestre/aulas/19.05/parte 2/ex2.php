<?php
class Filme {
    public $titulo;
    public $genero;
    public $duracao;

    public function __construct($titulo, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
    }
}

$filme1 = new Filme("Bolt - Supercão", "Infantil/Aventura", "1h36");
$filme2 = new Filme("Nem que a Vaca Tussa", "Infantil/Faroeste", "1h16");

echo "Filme 1:<br>Título: " . $filme1->titulo . " | Gênero: " . $filme1->genero . " | Duração: " . $filme1->duracao . "<br><br>";
echo "Filme 2:<br>Título: " . $filme2->titulo . " | Gênero: " . $filme2->genero . " | Duração: " . $filme2->duracao . "<br>";
?>