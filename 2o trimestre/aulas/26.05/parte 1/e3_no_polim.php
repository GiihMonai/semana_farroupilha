<?php
class Pessoa {
 public $nome;
 public function apresentar() {
 return "Olá, meu nome é {$this->nome}.";
 }
}

class Estudante extends Pessoa {
 public function apresentar() {
 return "Olá, sou o estudante {$this->nome}.";
 }
}
class Professor extends Pessoa {
 public function apresentar() {
 return "Olá, eu sou o professor {$this->nome}.";
 }
}
// Criando objetos
$aluno = new Estudante();
$aluno->nome = "Carlos";
$professor = new Professor();
$professor->nome = "Marcos";
// Chamando o mesmo método apresentar()
echo $aluno->apresentar(); // Olá, sou o estudante Carlos.
echo "<br>";
echo $professor->apresentar(); // Olá, eu sou o professor Marcos.
?>
