<link rel="stylesheet" href="style.css">

<?php
require_once 'cliente.php';
require_once 'mecanico.php';
require_once 'carro.php';
require_once 'moto.php';
require_once 'peca.php';
require_once 'servico.php';

$cliente = new Cliente("William da Silva Pinto", "(54) 99191-1991", "william@yahoo.com", "123.456.789-00", "Rua Duren, Alegrete");

$mecanico = new Mecanico("Bernardo Ferramentah", "(54) 92828-2828", "bernardo.mecanica@yahoo.com", "MEC-8522", "Tranformar em transformers");

$carro = new Carro("Koenigsegg", "Gemera", 2024, "MUAHAHA", "Verde Musgo", 2, "E85 Álcool");

$turboDuplo = new Peca("Par de Turbocompressores roletados de Fibra de Carbono", "PECA-FAST-777", 45000.00);
$volanteCorrida = new Peca("Volante de Alcantara Aliviado com Botão de Nitro Integrado", "PECA-NOS-01", 35000.50);

$servico = new Servico("Instalação de bi-turbo e customização de volante com fibra de carbono nas cores da bandeira do Brasil (Edição Especial Rio de Janeiro).", "23/06/2026", 80000.00, $cliente, $carro, $mecanico);
$servico->adicionarPeca($turboDuplo);
$servico->adicionarPeca($volanteCorrida);

echo "<div class='card-servico'>";
echo "<h2>Resumo do Serviço Registrado (Carro)</h2>";
echo "<p><strong>Data:</strong> " . $servico->getData() . "<br>";
echo "<strong>Descrição:</strong> " . $servico->getDescricao() . "<br>";
echo "<strong>Mão de Obra:</strong> R$ " . number_format($servico->getValorMaoDeObra(), 2, ',', '.') . "</p>";

echo "<h3>Cliente</h3>";
echo "<p><strong>Nome:</strong> " . $servico->getCliente()->getNome() . "<br>";
echo "<strong>CPF:</strong> " . $servico->getCliente()->getCpf() . "</p>";

echo "<h3>Veículo</h3>";
echo "<p><strong>Modelo:</strong> " . $servico->getVeiculo()->getMarca() . " " . $servico->getVeiculo()->getModelo() . "<br>";
echo "<strong>Placa:</strong> " . $servico->getVeiculo()->getPlaca() . " | <strong>Ano:</strong> " . $servico->getVeiculo()->getAno() . "</p>";

echo "<h3>Mecânico Responsável</h3>";
echo "<p><strong>Nome:</strong> " . $servico->getMecanico()->getNome() . "<br>";
echo "<strong>Especialidade:</strong> " . $servico->getMecanico()->getEspecialidade() . "</p>";

echo "<h3>Peças Utilizadas</h3>";
echo "<ul class='pecas-lista'>";
foreach ($servico->getPecas() as $peca) {
    echo "<li>" . $peca->getNome() . " (Cód: " . $peca->getCodigo() . ") - <strong>R$ " . number_format($peca->getValor(), 2, ',', '.') . "</strong></li>";
}
echo "</ul>";

echo "<div class='total-container'>Valor Total: R$ " . number_format($servico->calcularTotal(), 2, ',', '.') . "</div>";
echo "</div>";

$clienteMoto = new Cliente("Ricardo Gonzales", "(54) 99540-6725", "ricardo.gonzales@gmail.com", "987.654.321-11", "Av. Planalto, Bento Gonçalves"); 

$mecanicoMoto = new Mecanico("Toretto Vin Diesel", "(54) 94673-6795", "toretto.motos@gmail.com", "MEC-5055", "Mestre na engenharia de motores e corridas de rua");

$moto = new Moto("Kawasaki", "Ninja", 2022, "NNJ-2022", "Verde", 1000, "Elétrico"); 

$kitNitroMoto = new Peca("Kit de Nitrogênio (NOS) para Moto", "PECA-NOS-99", 45000.00); 
$pneuCorrida = new Peca("Pneu Traseiro Slick - Alta Aderência", "PECA-FAST-327", 18000.00); 

$servicoMoto = new Servico("Instalação de kit nitro e tunagem da injeção para racha de rua.", "23/06/2026", 12000.00, $clienteMoto, $moto, $mecanicoMoto );

$servicoMoto->adicionarPeca($kitNitroMoto); 
$servicoMoto->adicionarPeca($pneuCorrida); 
echo "<div class='card-servico'>";
echo "<h2>Resumo do Serviço Registrado (Moto)</h2>";
echo "<p><strong>Data:</strong> " . $servicoMoto->getData() . "<br>";
echo "<strong>Descrição:</strong> " . $servicoMoto->getDescricao() . "<br>";
echo "<strong>Mão de Obra:</strong> R$ " . number_format($servicoMoto->getValorMaoDeObra(), 2, ',', '.') . "</p>";

echo "<h3>Cliente</h3>";
echo "<p><strong>Nome:</strong> " . $servicoMoto->getCliente()->getNome() . "<br>";
echo "<strong>CPF:</strong> " . $servicoMoto->getCliente()->getCpf() . "</p>";

echo "<h3>Veículo (Moto)</h3>";
echo "<p><strong>Modelo:</strong> " . $servicoMoto->getVeiculo()->getMarca() . " " . $servicoMoto->getVeiculo()->getModelo() . "<br>";
echo "<strong>Placa:</strong> " . $servicoMoto->getVeiculo()->getPlaca() . " | <strong>Ano:</strong> " . $servicoMoto->getVeiculo()->getAno() . "<br>";
echo "<strong>Cilindradas:</strong> " . $moto->getCilindradas() . "cc | <strong>Partida:</strong> " . $moto->getTipoPartida() . "</p>";

echo "<h3>Mecânico Responsável</h3>";
echo "<p><strong>Nome:</strong> " . $servicoMoto->getMecanico()->getNome() . "<br>";
echo "<strong>Especialidade:</strong> " . $servicoMoto->getMecanico()->getEspecialidade() . "</p>";

echo "<h3>Peças Utilizadas</h3>";
echo "<ul class='pecas-lista'>";
foreach ($servicoMoto->getPecas() as $peca) {
    echo "<li>" . $peca->getNome() . " (Cód: " . $peca->getCodigo() . ") - <strong>R$ " . number_format($peca->getValor(), 2, ',', '.') . "</strong></li>";
}
echo "</ul>";

echo "<div class='total-container'>Valor Total: R$ " . number_format($servicoMoto->calcularTotal(), 2, ',', '.') . "</div>";
echo "</div>";