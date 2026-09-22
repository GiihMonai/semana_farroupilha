<?php
class Animal {
 public function emitirSom() {
 return "Som genérico de animal";
 }
}
class Cachorro extends Animal {
 // Aqui estamos fazendo override do método emitirSom()
 public function emitirSom() {
 return "Au Au!";
 }
}
class Gato extends Animal {
 // Outro override do mesmo método
 public function emitirSom() {
 return "Miau!";
 }
}
// Testando
$dog = new Cachorro();
$cat = new Gato();
echo $dog->emitirSom(); // Au Au!
echo "<br>";
echo $cat->emitirSom(); // Miau!
?>