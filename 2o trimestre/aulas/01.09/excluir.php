<?php
include 'conexao.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conexao->prepare("DELETE FROM equipamentos WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: listar.php");
        exit;
    } else {
        echo "<p>Erro ao excluir: " . $stmt->error . "</p>";
    }
    
    $stmt->close();
} else {
    header("Location: listar.php");
    exit;
}
?>
<link rel="stylesheet" href="style.css">