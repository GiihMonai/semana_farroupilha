<?php
class Calculadora {
 public function somar(int $a, int $b) {
 return $a + $b;
 }
}
$c = new Calculadora();
echo $c->somar(5, 3); // OK
echo $c->somar("5", "3"); // O PHP converte automaticamente em int
echo $c->somar("cinco", 3); // ERRO
?>
