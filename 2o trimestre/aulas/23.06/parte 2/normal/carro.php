<?php
require_once 'veiculo.php';

class Carro extends Veiculo { 
    private int $quantidadePortas; 
    private string $tipoCombustivel; 

    public function __construct(string $marca, string $modelo, int $ano, string $placa, string $cor, int $quantidadePortas, string $tipoCombustivel) {
        parent::__construct($marca, $modelo, $ano, $placa, $cor); 
        $this->quantidadePortas = $quantidadePortas;
        $this->tipoCombustivel = $tipoCombustivel;
    }

    public function getQuantidadePortas(): int { return $this->quantidadePortas; }
    public function setQuantidadePortas(int $quantidadePortas): void { $this->quantidadePortas = $quantidadePortas; }

    public function getTipoCombustivel(): string { return $this->tipoCombustivel; }
    public function setTipoCombustivel(string $tipoCombustivel): void { $this->tipoCombustivel = $tipoCombustivel; }
}