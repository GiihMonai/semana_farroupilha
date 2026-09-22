<?php
class Filme {
    public $titulo;
    public $genero;
    public $duracao;
}

$meuFilme = new Filme();

$meuFilme->titulo = "Rambo";
$meuFilme->genero = "Ação/Thriller";
$meuFilme->duracao = "1h33";

echo "Título: " . $meuFilme->titulo . "<br>";
echo "Gênero: " . $meuFilme->genero . "<br>";
echo "Duração: " . $meuFilme->duracao . "<br>";
?>