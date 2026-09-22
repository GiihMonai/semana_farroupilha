<?php
class Serie {
    public $nome;
    public $temporadas;
    public $assistindo;

    public function iniciarSerie() {
        $this->assistindo = true;
        echo "Você começou a assistir " . $this->nome . ".<br>";
    }
}

$minhaSerie = new Serie();
$minhaSerie->nome = "The 100";
$minhaSerie->temporadas = 2;
$minhaSerie->assistindo = false; 

$minhaSerie->iniciarSerie();

echo "Status assistindo: " . ($minhaSerie->assistindo ? "Sim (true)" : "Não (false)") . "<br>";
?>