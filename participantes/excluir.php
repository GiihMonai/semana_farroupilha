<?php
require_once '../config/conexao.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM participantes WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

header('Location: listar.php?msg=sucesso');
exit;
?>