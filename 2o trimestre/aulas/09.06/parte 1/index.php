<?php
require_once 'contacorr.php';
require_once 'contapoup.php';

echo "
<style>
    body { 
        background-color: #e4d6ffff; 
        color: #090018ff; 
        padding: 30px; 
    }
    h1 { 
        border-bottom: 3px solid #8e56ffff; 
        padding-bottom: 10px; 
    }
    h2 { 
        background-color: #8e56ffff; 
        padding: 8px; 
        margin-top: 30px; 
        border-radius: 4px; 
    }
    .container {
        background-color: #fbf8ffff;
        border: 2px solid #6518d8ff;
        padding: 15px;
        margin: 15px 0;
        border-radius: 0 8px 8px 0;
    }
    .card { 
        background: #fbf8ffff; 
        padding: 15px; 
        margin: 10px 0; 
        border: 2px solid #6518d8ff; 
        border-radius: 4px; 
    }
    .erro { 
        color: #c30909ff; 
        font-weight: bold; 
    }
</style>
";

function formataReal($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

echo "<h1>Testes do Sistema Bancário</h1>";

echo "<h2>1. Dados Iniciais</h2>";
$cc = new ContaCorrente("12345", "Ana Souza", 500.00);
$cp = new ContaPoupanca("67890", "Carlos Lima", 1000.00);

echo "<div class='card'>";
echo "<b>Conta Corrente</b><br>Titular: " . $cc->getTitular() . " | Saldo: " . formataReal($cc->getSaldo()) . "<br>";
echo "</div>";

echo "<div class='card'>";
echo "<b>Conta Poupança</b><br>Titular: " . $cp->getTitular() . " | Saldo: " . formataReal($cp->getSaldo()) . "<br>";
echo "</div>";


echo "<h2>2. Operações: Conta Corrente</h2>";

if ($cc->depositar(100.00)) {
    echo "Depósito realizado: " . formataReal(100.00) . "<br>";
    echo "Saldo atual: " . formataReal($cc->getSaldo()) . "<br>";
}

if ($cc->sacar(200.00)) {
    echo "Saque realizado: " . formataReal(200.00) . "<br>";
    echo "Saldo atual: " . formataReal($cc->getSaldo()) . "<br>";
}

if ($cc->aplicarOperacaoMensal()) {
    echo "Operação mensal da conta corrente aplicada.<br>";
    echo "Tarifa mensal de R$ 10,00 cobrada.<br>";
    echo "Saldo atual: " . formataReal($cc->getSaldo()) . "<br>";
}


echo "<h2>3. Operações: Conta Poupança</h2>";

if ($cp->depositar(200.00)) {
    echo "Depósito realizado: " . formataReal(200.00) . "<br>";
    echo "Saldo atual: " . formataReal($cp->getSaldo()) . "<br>";
}

$rendido = $cp->aplicarOperacaoMensal();
if ($rendido > 0) {
    echo "Operação mensal da conta poupança aplicada.<br>";
    echo "Rendimento mensal de 5% aplicado (" . formataReal($rendido) . ").<br>";
    echo "Saldo atual: " . formataReal($cp->getSaldo()) . "<br>";
}


echo "<h2>4. Testando Validações e Erros</h2>";

echo "<b>Tentativa de saque de R$ 500,00 na Conta Corrente:</b><br>";
if (!$cc->sacar(500.00)) {
    echo "<span class='erro'>Saldo insuficiente.</span><br>";
}

echo "<b>Tentativa de depósito de R$ -50,00 na Conta Poupança:</b><br>";
if (!$cp->depositar(-50.00)) {
    echo "<span class='erro'>Valor de depósito inválido.</span><br>";
}
?>