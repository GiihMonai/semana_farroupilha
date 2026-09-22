<?php
class Conexao {
    public function __construct() {
        echo "Conexão iniciada.<br>";
    }

    public function __destruct() {
        echo "Conexão encerrada.<br>";
    }
}

$con = new Conexao();

echo "Executando ações no banco de dados...<br>";
?>