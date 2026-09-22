<?php
require_once 'veiculo.php';

class Moto extends Veiculo { 
    private int $cilindradas;
    private string $tipoPartida; 

    public function __construct(string $marca, string $modelo, int $ano, string $placa, string $cor, int $cilindradas, string $tipoPartida) {
        parent::__construct($marca, $modelo, $ano, $placa, $cor);
        $this->cilindradas = $cilindradas;
        $this->tipoPartida = $tipoPartida;
    }

    public function getCilindradas(): int { return $this->cilindradas; }
    public function setCilindradas(int $cilindradas): void { $this->cilindradas = $cilindradas; }

    public function getTipoPartida(): string { return $this->tipoPartida; }
    public function setTipoPartida(string $tipoPartida): void { $this->tipoPartida = $tipoPartida; }
}