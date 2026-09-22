<?php
class Pessoa {
 public string $nome;
 public int $idade;
 public float $altura;
}
$p1 = new Pessoa();
$p1->nome = "Maria"; // OK
$p1->idade = 20; // OK
$p1->altura = 1.65; // OK
$p1->idade = "vinte"; // ERRO: string não pode ser atribuída a int
?>