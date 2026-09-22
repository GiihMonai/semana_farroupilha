<?php
require_once 'guerreiro.php';
require_once 'mago.php';
require_once 'arqueiro.php';

$william = new Guerreiro("William", "Guerreiro", 82, 5);
$amy     = new Arqueiro("Amy", "Arqueiro", 43, 3);
$jaques  = new Mago("Jaques", "Mago", 52, 6);

echo "<strong>--- Dados Iniciais dos Personagens ---</strong><br><br>";

echo "Nome: " . $william->getNome() . "<br>";
echo "Classe: " . $william->getClasse() . "<br>";
echo "Vida: " . $william->getVida() . "<br>";
echo "Nível: " . $william->getNivel() . "<br><br>";

echo "Nome: " . $amy->getNome() . "<br>";
echo "Classe: " . $amy->getClasse() . "<br>";
echo "Vida: " . $amy->getVida() . "<br>";
echo "Nível: " . $amy->getNivel() . "<br><br>";

echo "Nome: " . $jaques->getNome() . "<br>";
echo "Classe: " . $jaques->getClasse() . "<br>";
echo "Vida: " . $jaques->getVida() . "<br>";
echo "Nível: " . $jaques->getNivel() . "<br><br>";


echo "<strong>--- Demonstração de Ações ---</strong><br><br>";

$william->atacar();
$amy->atacar();
$jaques->atacar();

$william->receberDano(20);

$jaques->setVida(60);
echo "Vida atual de Jaques ajustada para: " . $jaques->getVida() . "<br>";
$jaques->recuperarVida(20);

$amy->subirNivel();

echo "<strong>--- Testes com Valores Inválidos ---</strong><br><br>";

echo "Vida de William como 150:<br>";
$william->setVida(150);
echo "<br>";

echo "Vida de William como -10:<br>";
$william->setVida(-10);
echo "<br>";

echo "Nível de Amy como 0:<br>";
$amy->setNivel(0);
echo "<br>";

echo "Novo personagem com valores inválidos (Vida: 200, Nível: -5):<br>";
$xakez = new Mago("Xakez", "Mago", 200, -5);
