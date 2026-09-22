<?php
class Musica {
    private $titulo;
    private $artista;
    private $duracaoSegundos;

    public function __construct($titulo, $artista, $duracaoSegundos) {
        $this->titulo = $titulo;
        $this->artista = $artista;
        $this->setDuracaoSegundos($duracaoSegundos); 
    }

    public function getTitulo() { return $this->titulo; }
    public function setTitulo($titulo) { $this->titulo = $titulo; }

    public function getArtista() { return $this->artista; }
    public function setArtista($artista) { $this->artista = $artista; }

    public function getDuracaoSegundos() { return $this->duracaoSegundos; }
    
    public function setDuracaoSegundos($duracaoSegundos) {
        if ($duracaoSegundos >= 10) {
            $this->duracaoSegundos = $duracaoSegundos;
        } else {
            echo "Erro: Duração inválida para a música '{$this->titulo}'! Deve ter pelo menos 10 segundos.<br>";
            $this->duracaoSegundos = 10;
        }
    }

    public function exibirFaixa() {
        echo "Faixa: <strong>" . $this->getTitulo() . "</strong> por " . $this->getArtista() . " (" . $this->getDuracaoSegundos() . "s)<br>";
    }
}


echo "Objeto 1 (Válido):<br>";
$musica1 = new Musica("DTmF", "Bad Bunny", 237);
$musica1->exibirFaixa();

echo "<br>Objeto 2 (Tentando valor inválido):<br>";
$musica2 = new Musica("aaaaaaaaaaaaaaaaaa", "XXtentación", 3);
$musica2->exibirFaixa();
?>