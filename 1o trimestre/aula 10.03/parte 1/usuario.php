<?php
function obterDadosUsuario() {
    return [
        "nome" => "Guilherme",
        "email" => "kxinhos_ely@gmail.com", 
        "idade" => 16 
    ];
}

$usuario = obterDadosUsuario();

echo "Nome: " . $usuario['nome'] . "<br>"; 
echo "Email: " . $usuario['email'] . "<br>"; 
echo "Idade: " . $usuario['idade']; 
?>