<?php
abstract class Animal {
    public Proprietario $proprietario;
    public string $nome;
    public int $idade;
    public string $raca;
    public string $pedigree;

    public function __construct(Proprietario $proprietario, string $nome, int $idade, string $raca, string $pedigree) {
        $this->proprietario = $proprietario;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->pedigree = $pedigree;
    }
    
    abstract public function getTipo(): string;
}