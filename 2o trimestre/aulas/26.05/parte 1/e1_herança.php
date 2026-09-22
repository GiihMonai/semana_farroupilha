<?php
// Classe pai (superclasse)
class Pessoa {
 public $nome;
 public $idade;
 public function apresentar() {
 return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
 }
}
// Classe filha (subclasse)
class Estudante extends Pessoa {
 public $escola;
 public function apresentar() {
 // Sobrescreve o método da classe pai
 return parent::apresentar() . " Estudo na escola {$this->escola}.";
 }
}
// Criando objetos
$aluno = new Estudante();
$aluno->nome = "João";
$aluno->idade = 16;
$aluno->escola = "Escola Estadual Central";
echo $aluno->apresentar();
?>
