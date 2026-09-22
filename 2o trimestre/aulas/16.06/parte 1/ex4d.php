<?php
class Triangulo {
    private float $base;
    private float $altura;

    public function setBase(float $base): void {
        $this->base = $base;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function calculaArea(): float {
        return ($this->base * $this->altura) / 2;
    }
}