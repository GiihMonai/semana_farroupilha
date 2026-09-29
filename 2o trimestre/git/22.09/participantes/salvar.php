<?php
require_once "../config/conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);

    if (!empty($nome) && !empty($email)) {
        $sql = "INSERT INTO participantes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->execute();
    }
}

header("Location: listar.php");
exit;