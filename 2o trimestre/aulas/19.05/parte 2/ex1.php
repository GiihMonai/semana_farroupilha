<?php
class Aluno {
    public $nome;
    public $idade;
    public $curso;

    public function __construct($nome, $idade, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
    }
}

$aluno1 = new Aluno("Elyy", 16, "Informática para Internet");

echo "Nome: " . $aluno1->nome . "<br>";
echo "Idade: " . $aluno1->idade . "<br>";
echo "Curso: " . $aluno1->curso . "<br>";
?>