<?php
session_start();
require '../config/conexao.php';

if (!isset($_SESSION['usuario_id'])) { die('Acesso negado.'); }

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM participantes WHERE id = ?");
    if ($stmt->execute([$id])) {
        header("Location: listar.php");
    } else {
        echo "<script>alert('Erro ao excluir!'); window.location='listar.php';</script>";
    }
}
?>