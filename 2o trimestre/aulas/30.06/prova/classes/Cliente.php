<?php
class Cliente {
    private string $nome;
    private string $telefone;

    public function __construct(string $nome, string $telefone) {
        $this->setNome($nome);
        $this->setTelefone($telefone);
    }

    public function getNome(): string {return $this->nome;}

    public function setNome(string $nome): void {
        if (trim($nome) === "") {
            throw new Exception("O nome não poderá ser vazio.");
        }
        $this->nome = $nome;
    }

    public function getTelefone(): string {return $this->telefone;}

    public function setTelefone(string $telefone): void {
        if (trim($telefone) === "") {
            throw new Exception("O telefone não poderá ser vazio.");
        }
        $this->telefone = $telefone;
    }
}
