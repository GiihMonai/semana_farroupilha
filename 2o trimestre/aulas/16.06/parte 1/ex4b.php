<?php
class Retangulo {
    private float $ladoMaior;
    private float $ladoMenor;

    public function setLadoMaior(float $maior): void {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor(float $menor): void {
        $this->ladoMenor = $menor;
    }

    public function calculaArea(): float {
        return $this->ladoMaior * $this->ladoMenor;
    }
}