<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'proprietario.php';
require_once 'animal.php';
require_once 'medicamento.php';
require_once 'consulta.php';
require_once 'pagamento.php';

echo "<h2>--- Sistema de Gestão de PetShop ---</h2>";

$proprietario = new Proprietario(
    "Gisely Molinari Menegotto", "999.999.999-99", "0000000000", 
    "(54) 9999-0000", "(54) 98888-3333", "Baker Street, 221B", 
    "Bento Gonçalves", "95700-000", "Centro"
);

$animal = new Animal(
    $proprietario, "Ogun", "Gato", 5, "Siamês", "Macho", "Bege com manchas marrons", "Sim", 7.23, "Calmo"
);

$consulta = new Consulta("Dr. Rafael Ramires Jaques", $proprietario, $animal, "2026-06-16 14:00", "Sala C-109", true);
$consulta->adicionarMedicamento(new Medicamento("Remédio 1", "123AB"));

$pagamento = new PagamentoCartao("2026-06-16", 250.00, "VISA", "4500.1234.5678.9000");

echo "Proprietário: " . $consulta->proprietario->nome . "<br>";
echo "Animal: " . $consulta->animal->nome . " (" . $consulta->animal->tipo . ") - Cor: " . $consulta->animal->cor . "<br>";
echo "Consulta com: " . $consulta->veterinario . "<br>";
echo "Pagamento via: " . $pagamento->tipo . "<br>";