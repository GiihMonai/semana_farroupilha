<?php
class Musica {
    public $nome;
    public $artista;
    public $duracao;

    public function tocar() {
        echo "Tocando a música " . $this->nome . " de " . $this->artista . ".<br>";
    }
}

$musica1 = new Musica();
$musica1->nome = "Drag Me Down";
$musica1->artista = "One Direction";

$musica2 = new Musica();
$musica2->nome = "Blue";
$musica2->artista = "Billie Eilish";

$musica1->tocar();
$musica2->tocar();
?>