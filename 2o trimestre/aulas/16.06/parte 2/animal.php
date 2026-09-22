<?php
class Animal {
    public Proprietario $proprietario;
    public string $nome;
    public string $tipo;
    public int $idade;
    public string $raca;
    public string $sexo;
    public string $cor;
    public string $pedigree;
    public ?float $peso; 
    public ?string $temperamento; 

    public function __construct(
        Proprietario $proprietario, 
        string $nome, 
        string $tipo, 
        int $idade, 
        string $raca, 
        string $sexo, 
        string $cor, 
        string $pedigree, 
        ?float $peso = null, 
        ?string $temperamento = null
    ) {
        $this->proprietario = $proprietario;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->sexo = $sexo;
        $this->cor = $cor;
        $this->pedigree = $pedigree;
        $this->peso = $peso;
        $this->temperamento = $temperamento;
    }
}