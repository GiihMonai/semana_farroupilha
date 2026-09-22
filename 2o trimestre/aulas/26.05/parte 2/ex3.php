<?php
class Animal {
    public function emitirSom() {
        return "grrrrrrrrrrrr";
    }
}

class Cachorro extends Animal { 
    public function emitirSom() {
        return "auuuuuuuuuuuuuuuuuuu baby im playin w you tonight hunt u down eat u alive just like animals like animals like animals mals"; 
    }
}

class Gato extends Animal {
    public function emitirSom() {
        return "tadinho dele ele nao tem namorad noa tem amigos nao tem familia tadinho dele";
    }
}

$dog = new Cachorro();
$cat = new Gato();

echo "Cachorro: " . $dog->emitirSom() . "<br>";
echo "Gato: " . $cat->emitirSom() . "<br>";
?>