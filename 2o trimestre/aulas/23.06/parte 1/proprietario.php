<?php
class Proprietario {
    public string $nome;
    public string $cpf;
    public string $rg;
    public string $telefone;
    public string $celular;
    public string $endereco;
    public string $cidade;
    public string $cep;
    public string $bairro;

    public function __construct($nome, $cpf, $rg, $telefone, $celular, $endereco, $cidade, $cep, $bairro) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->bairro = $bairro;
    }
}