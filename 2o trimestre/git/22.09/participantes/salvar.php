<?php
session_start();
require 'config/conexao.php';

if (!isset($_SESSION['usuario_id'])) { die('Acesso negado.'); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $stmt = $pdo->prepare("INSERT INTO participantes (nome, email, telefone) VALUES (?, ?, ?)");
    
    if ($stmt->execute([$nome, $email, $telefone])) {
        header("Location: listar.php");
    } else {
        echo "<script>alert('Erro ao salvar no banco de dados!'); window.history.back();</script>";
    }
}
?>