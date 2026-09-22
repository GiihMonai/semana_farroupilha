<?php
class Saudacao {
 public function mensagem(string $nome): string {
 return "Olá, $nome!";
 }
}
$s = new Saudacao();
echo $s->mensagem("Carlos"); // Olá, Carlos!
?>
