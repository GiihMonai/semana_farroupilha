<?php
require_once "../config/conexao.php";

$id = $_GET['id'] ?? null;

if ($id) {
    $sql = "DELETE FROM participantes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}

header("Location: listar.php");
exit;