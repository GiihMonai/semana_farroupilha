<?php
session_start();
require '../config/conexao.php';

if (!isset($_SESSION['usuario_id'])) { die('Acesso negado.'); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $stmt = $pdo->prepare("UPDATE participantes SET nome = ?, email = ?, telefone = ? WHERE id = ?");
    
    if ($stmt->execute([$nome, $email, $telefone, $id])) {
        header("Location: listar.php");
    } else {
        echo "<script>alert('Erro ao atualizar!'); window.history.back();</script>";
    }
}
?>