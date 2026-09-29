<?php
require_once "../config/conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);

    if ($id && !empty($nome) && !empty($email)) {
        $sql = "UPDATE participantes SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}

header("Location: listar.php");
exit;