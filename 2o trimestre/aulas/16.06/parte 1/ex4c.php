<?php
class Losango {
    private float $diagonalMaior;
    private float $diagonalMenor;

    public function setDiagonalMaior(float $maior): void {
        $this->diagonalMaior = $maior;
    }

    public function setDiagonalMenor(float $menor): void {
        $this->diagonalMenor = $menor;
    }

    public function calculaArea(): float {
        return ($this->diagonalMaior * $this->diagonalMenor) / 2;
    }
}