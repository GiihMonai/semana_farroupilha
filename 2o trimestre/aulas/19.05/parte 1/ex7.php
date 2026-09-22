<?php
class ContaGame {
    public $nickname;
    public $level;
    public $jogoFavorito;

    public function subirNivel() {
        echo "Level atual: " . $this->level . "<br>";
        echo "Subindo de nível...<br>";
        $this->level += 1; 
        echo "Novo level: " . $this->level . "<br><br>";
    }
}

$jogador = new ContaGame();
$jogador->nickname = "elly_monai";
$jogador->level = 55;
$jogador->jogoFavorito = "Island Saver";

$jogador->subirNivel();
$jogador->subirNivel();
?>