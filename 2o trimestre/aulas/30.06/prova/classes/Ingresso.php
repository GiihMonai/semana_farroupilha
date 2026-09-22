<?php
class Ingresso {
    private string $filme;
    private float $valor;

    public function __construct(string $filme, float $valor) {
        $this->filme = $filme;
        $this->valor = 0.01; 
        $this->setValor($valor);
    }

    public function getFilme(): string {return $this->filme;}

    public function setFilme(string $filme): void {$this->filme = $filme;}

    public function getValor(): float {return $this->valor;}

    public function setValor(float $valor): void {
        if ($valor > 0) {
            $this->valor = $valor;
        }
    }
}
