<?php
require_once 'pessoa.php';

class Cliente extends Pessoa {
    private string $cpf;
    private string $endereco; 

    public function __construct(string $nome, string $telefone, string $email, string $cpf, string $endereco) { 
        parent::__construct($nome, $telefone, $email); 
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getCpf(): string { return $this->cpf; }
    public function setCpf(string $cpf): void { $this->cpf = $cpf; }

    public function getEndereco(): string { return $this->endereco; }
    public function setEndereco(string $endereco): void { $this->endereco = $endereco; }
}