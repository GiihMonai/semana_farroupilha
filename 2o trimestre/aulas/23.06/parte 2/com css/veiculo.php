<?php
abstract class Veiculo {
    protected string $marca; 
    protected string $modelo; 
    protected int $ano;
    protected string $placa;
    protected string $cor; 

    public function __construct(string $marca, string $modelo, int $ano, string $placa, string $cor) { 
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->placa = $placa;
        $this->cor = $cor;
    }

    public function getMarca(): string { return $this->marca; }
    public function setMarca(string $marca): void { $this->marca = $marca; }

    public function getModelo(): string { return $this->modelo; }
    public function setModelo(string $modelo): void { $this->modelo = $modelo; }

    public function getAno(): int { return $this->ano; }
    public function setAno(int $ano): void { $this->ano = $ano; }

    public function getPlaca(): string { return $this->placa; }
    public function setPlaca(string $placa): void { $this->placa = $placa; }

    public function getCor(): string { return $this->cor; }
    public function setCor(string $cor): void { $this->cor = $cor; }
}