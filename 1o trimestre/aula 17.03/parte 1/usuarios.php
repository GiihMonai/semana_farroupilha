<?php
$usuarios = [
    ["nome" => "guilherme", "idade" => 122],
    ["nome" => "elyy", "idade" => 35],
    ["nome" => "lore", "idade" => 77]
];

foreach ($usuarios as $user) {
    echo "Nome: " . $user['nome'] . "<br>";
    echo "Idade: " . $user['idade'] . "<br><br>";
}
?>