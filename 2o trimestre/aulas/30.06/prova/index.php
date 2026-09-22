<?php
require_once 'classes/Cliente.php';
require_once 'classes/Ingresso.php';
require_once 'classes/Reserva.php';
require_once 'classes/Pagamento.php';
require_once 'classes/PagamentoPix.php';
require_once 'classes/PagamentoCartao.php';

echo "<h2>Gerenciamento de Reservas</h2>";

$cliente = new Cliente("Ana Oliveira", "54 98888-7777");

$ingresso1 = new Ingresso("Homem-Aranha", 32.00); 
$ingresso2 = new Ingresso("Divertida Mente", 16.00);

$reserva = new Reserva($cliente, 5.00);

$reserva->adicionarIngresso($ingresso1); 
$reserva->adicionarIngresso($ingresso2); 

echo "<strong>Cliente:</strong> " . $cliente->getNome() . "<br>"; 
echo "<strong>Telefone:</strong> " . $cliente->getTelefone() . "<br>"; 
echo "----------------------------------------<br>";

$subtotal = $reserva->calcularSubtotal();
$taxa = 5.00; 
$total = $reserva->calcularTotal();

echo "Subtotal:        R$ " . number_format($subtotal, 2, ',', '.') . "<br>"; 
echo "Taxa de Serviço: R$ " . number_format($taxa, 2, ',', '.') . "<br>"; 
echo "Total Reserva:   R$ " . number_format($total, 2, ',', '.') . "<br>"; 
echo "----------------------------------------<br>";

echo "<strong>Pagamento via Pix:</strong><br>";
$pagamentoPix = new PagamentoPix($total);
echo $pagamentoPix->processarPagamento() . "<br>"; 
echo "----------------------------------------<br>";

echo "<strong>Pagamento via Cartão:</strong><br>";
$pagamentoCartao = new PagamentoCartao($total);
echo $pagamentoCartao->processarPagamento() . "<br>"; 
echo "----------------------------------------<br>";

echo "<strong>Tentativa de alteração inválida (Valor: -20):</strong><br>";
echo "Valor antes da tentativa: R$ " . number_format($ingresso1->getValor(), 2, ',', '.') . "<br>";

$ingresso1->setValor(-20); 

echo "Valor após a tentativa:  R$ " . number_format($ingresso1->getValor(), 2, ',', '.') . "<br>"; 
?>