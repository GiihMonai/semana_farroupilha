<?php
class Esportista {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function competir() {
        return "ó ta no game";
    }
}

class JogadorFutebol extends Esportista {
    public function competir() { 
        return "ó, {$this->nome} vai joga";
    }
}

class Piloto extends Esportista { 
    public function competir() { 
        return "ó, {$this->nome} YO SOY FRANCESCO VIRGULINI LA MAQUINA MAS VELOZ DE TUTTI ITALI VIUUUUMMMM"; 
    }
}

$jogador = new JogadorFutebol("Mbappé");
$piloto = new Piloto("Charles Leclerc");

echo $jogador->competir() . "<br>";
echo $piloto->competir() . "<br>";
?>