<?php
require_once 'proprietario.php';
require_once 'cachorro.php';
require_once 'gato.php';
require_once 'passarinho.php';
require_once 'cartao_credito.php';
require_once 'cheque.php';
require_once 'consulta.php';

$proprietario = new Proprietario(
    "Gisely dos Santos Molinari", "123.456.789-00", "109876543", 
    "(54) 3451-0000", "(54) 99999-1111", "Rua X, 123", 
    "Bento Gonçalves", "95700-000", "Centro"
);

$cachorro = new Cachorro($proprietario, "Dante", 4, "Pastor Alemão", "Sim", 32.5, "Calmo", "Capa Preta");
$gato = new Gato($proprietario, "Ogun", 2, "Siamês", "Sim", "Branco e Marrom", "Azul");
$passarinho = new Passarinho($proprietario, "Piupiu", 1, "Belga", "Não", "Amarela", "Amarelo", "Sim");

$pets = [$cachorro, $gato, $passarinho];

echo "=== PETS CADASTRADOS ===<br>";
foreach ($pets as $pet) {
    echo "Dono(a): {$pet->proprietario->nome} | Pet: {$pet->nome} ({$pet->getTipo()}) | Raça: {$pet->raca}<br>";
}
echo "<br>";

$consultaGato = new Consulta("Dr. Rafael Ramires Jaques", $gato, "23/06/2026 10:00", "Sala 1", false);
$consultaGato->adicionarMedicamento("Remédio 1", "123AB");
$consultaGato->adicionarMedicamento("Remédio 2", "156GB");

$pagamentoConsulta = new CartaoCredito("23/06/2026", 150.00, "VISA", "4444-XXXX-XXXX-1111");
$consultaGato->registrarPagamento($pagamentoConsulta);

echo "=== RESUMO DA CONSULTA E PAGAMENTO ===<br>";
echo "Data/Hora: {$consultaGato->data} | Sala: {$consultaGato->sala}<br>";
echo "Veterinário: {$consultaGato->veterinario}<br>";
echo "Paciente: {$consultaGato->animal->nome} ({$consultaGato->animal->getTipo()})<br>";
echo "Proprietário: {$consultaGato->animal->proprietario->nome}<br>";

echo "Medicamentos Receitados:<br>";
foreach ($consultaGato->medicamentos as $med) {
    echo "  - Nome: {$med['nome']} (Lote: {$med['lote']})<br>";
}

if ($consultaGato->pagamento !== null) {
    echo "Status do Pagamento: PAGO<br>";
    echo "  - Valor: R$ " . number_format($consultaGato->pagamento->valor, 2, ',', '.') . "<br>";
    echo "  - Forma: " . $consultaGato->pagamento->exibirDetalhes() . "<br>";
} else {
    echo "Status do Pagamento: PENDENTE<br>";
}
