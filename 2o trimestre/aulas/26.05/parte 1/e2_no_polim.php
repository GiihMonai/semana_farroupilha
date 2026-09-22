<?php
class Pessoa {
 public $nome;
 public $tipo; // estudante ou professor
}
$p1 = new Pessoa();
$p1->nome = "Carlos";
$p1->tipo = "estudante";
$p2 = new Pessoa();
$p2->nome = "Marcos";
$p2->tipo = "professor";

// Verificando manualmente o tipo de cada pessoa
if ($p1->tipo == "estudante") {
 echo "Olá, sou o estudante {$p1->nome}.";
} elseif ($p1->tipo == "professor") {
 echo "Olá, eu sou o professor {$p1->nome}.";
}
echo "<br>";
if ($p2->tipo == "estudante") {
 echo "Olá, sou o estudante {$p2->nome}.";
} elseif ($p2->tipo == "professor") {
 echo "Olá, eu sou o professor {$p2->nome}.";
}
?>
