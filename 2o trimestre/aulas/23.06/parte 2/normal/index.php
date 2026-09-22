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

echo "--------------------------------------------------<br>";
echo "RESUMO DO SERVIÇO REGISTRADO (CARRO)<br>";
echo "--------------------------------------------------<br>";
echo "Data: " . $servico->getData() . "<br>";
echo "Descrição: " . $servico->getDescricao() . "<br>";
echo "Mão de Obra: R$ " . number_format($servico->getValorMaoDeObra(), 2, ',', '.') . "<br>";
echo "--------------------------------------------------<br>";
echo "CLIENTE:<br>";
echo "  Nome: " . $servico->getCliente()->getNome() . "<br>";
echo "  CPF: " . $servico->getCliente()->getCpf() . "<br>";
echo "--------------------------------------------------<br>";
echo "VEÍCULO:<br>";
echo "  Modelo: " . $servico->getVeiculo()->getMarca() . " " . $servico->getVeiculo()->getModelo() . "<br>";
echo "  Placa: " . $servico->getVeiculo()->getPlaca() . " | Ano: " . $servico->getVeiculo()->getAno() . "<br>";
echo "--------------------------------------------------<br>";
echo "MECÂNICO RESPONSÁVEL:<br>";
echo "  Nome: " . $servico->getMecanico()->getNome() . "<br>";
echo "  Especialidade: " . $servico->getMecanico()->getEspecialidade() . "<br>";
echo "--------------------------------------------------<br>";
echo "PEÇAS UTILIZADAS:<br>";

foreach ($servico->getPecas() as $peca) {
    echo "  - " . $peca->getNome() . " (Cód: " . $peca->getCodigo() . ") - R$ " . number_format($peca->getValor(), 2, ',', '.') . "<br>";
}

echo "--------------------------------------------------<br>";
echo "VALOR TOTAL DO ATENDIMENTO: R$ " . number_format($servico->calcularTotal(), 2, ',', '.') . "<br><br><br><br>";

$clienteMoto = new Cliente("Ricardo Gonzales", "(54) 99540-6725", "ricardo.gonzales@gmail.com", "987.654.321-11", "Av. Planalto, Bento Gonçalves"); 

$mecanicoMoto = new Mecanico("Toretto Vin Diesel", "(54) 94673-6795", "toretto.motos@gmail.com", "MEC-5055", "Mestre na engenharia de motores e corridas de rua");

$moto = new Moto("Kawasaki", "Ninja", 2022, "NNJ-2022", "Verde", 1000, "Elétrico"); 

$kitNitroMoto = new Peca("Kit de Nitrogênio (NOS) para Moto", "PECA-NOS-99", 45000.00); 
$pneuCorrida = new Peca("Pneu Traseiro Slick - Alta Aderência", "PECA-FAST-327", 18000.00); 

$servicoMoto = new Servico("Instalação de kit nitro e tunagem da injeção para racha de rua.", "23/06/2026", 12000.00, $clienteMoto, $moto, $mecanicoMoto );

$servicoMoto->adicionarPeca($kitNitroMoto); 
$servicoMoto->adicionarPeca($pneuCorrida); 
echo "--------------------------------------------------<br>";
echo "RESUMO DO SERVIÇO REGISTRADO (MOTO)<br>";
echo "--------------------------------------------------<br>";
echo "Data: " . $servicoMoto->getData() . "<br>"; 
echo "Descrição: " . $servicoMoto->getDescricao() . "<br>"; 
echo "Mão de Obra: R$ " . number_format($servicoMoto->getValorMaoDeObra(), 2, ',', '.') . "<br>"; 
echo "--------------------------------------------------<br>";
echo "CLIENTE:<br>";
echo "  Nome: " . $servicoMoto->getCliente()->getNome() . "<br>"; 
echo "  CPF: " . $servicoMoto->getCliente()->getCpf() . "<br>"; 
echo "--------------------------------------------------<br>";
echo "VEÍCULO (MOTO):<br>";
echo "  Modelo: " . $servicoMoto->getVeiculo()->getMarca() . " " . $servicoMoto->getVeiculo()->getModelo() . "<br>"; 
echo "  Placa: " . $servicoMoto->getVeiculo()->getPlaca() . " | Ano: " . $servicoMoto->getVeiculo()->getAno() . "<br>"; 
echo "  Cilindradas: " . $moto->getCilindradas() . "cc | Partida: " . $moto->getTipoPartida() . "<br>"; 
echo "--------------------------------------------------<br>";
echo "MECÂNICO RESPONSÁVEL:<br>";
echo "  Nome: " . $servicoMoto->getMecanico()->getNome() . "<br>"; 
echo "  Especialidade: " . $servicoMoto->getMecanico()->getEspecialidade() . "<br>";
echo "--------------------------------------------------<br>";
echo "PEÇAS UTILIZADAS:<br>";

foreach ($servicoMoto->getPecas() as $peca) {
    echo "  - " . $peca->getNome() . " (Cód: " . $peca->getCodigo() . ") - R$ " . number_format($peca->getValor(), 2, ',', '.') . "<br>"; 
}

echo "--------------------------------------------------<br>";
echo "VALOR TOTAL DO ATENDIMENTO: R$ " . number_format($servicoMoto->calcularTotal(), 2, ',', '.') . "<br>"; 
