<?php
class Animal {
    public $nome;
    public $especie;
    public $idade;

    public function emitirSom() {
        $especieLower = strtolower($this->especie);
        
        if ($especieLower == "cachorro") {
            echo "Au au!<br>";
        } elseif ($especieLower == "gato") {
            echo " miau  miau  miau  miau  miau  miau  miau  miau  miau  miau  miau  miau  miau <br>";
        } elseif ($especieLower == "lobo") {
            echo "AUUUUUUUUUUUUUUUUUUUUUUUUUUUU baby I'm preying on you tonight hunt you down eat you alive just like animals animals like animals-mals<br>";
        } else {
            echo "Som desconhecido<br>";
        }
    }
}

$animal1 = new Animal();
$animal1->nome = "Lobo Mau da Disney";
$animal1->especie = "lobo";
$animal1->idade = 7;

echo "Nome: " . $animal1->nome . " | Espécie: " . $animal1->especie . " | Idade: " . $animal1->idade . " anos<br>";
echo "Som: ";
$animal1->emitirSom();

echo "<br>";

$animal2 = new Animal();
$animal2->nome = "Ogun";
$animal2->especie = "Gato";
$animal2->idade = 4;

echo "Nome: " . $animal2->nome . " | Espécie: " . $animal2->especie . " | Idade: " . $animal2->idade . " anos<br>";
echo "Som: ";
$animal2->emitirSom();
?>