<?php
class Jogo {
    public $nome;
    public $categoria;
    public $anoLancamento;
}

$jogo1 = new Jogo();
$jogo1->nome = "Hollow Knight: Silksong";
$jogo1->categoria = "Ação/Aventura";
$jogo1->anoLancamento = 2025;

$jogo2 = new Jogo();
$jogo2->nome = "FNAF Tower Defense";
$jogo2->categoria = "Estratégia em Tempo Real";
$jogo2->anoLancamento = 2024;

echo "Jogo 1:<br>";
echo $jogo1->nome . " - " . $jogo1->categoria . " - " . $jogo1->anoLancamento . "<br><br>";

echo "Jogo 2:<br>";
echo $jogo2->nome . " - " . $jogo2->categoria . " - " . $jogo2->anoLancamento . "<br>";
?>