<?php
abstract class Pessoa {
    protected string $nome;
    protected string $telefone; 
    protected string $email;

    public function __construct(string $nome, string $telefone, string $email) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getTelefone(): string { return $this->telefone; }
    public function setTelefone(string $telefone): void { $this->telefone = $telefone; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void { $this->email = $email; }
}