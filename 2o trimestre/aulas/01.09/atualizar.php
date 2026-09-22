<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $patrimonio = $_POST['patrimonio'];
    $estado = $_POST['estado'];
    $disponivel = $_POST['disponivel'];

    $stmt = $conexao->prepare("UPDATE equipamentos SET nome = ?, categoria = ?, patrimonio = ?, estado = ?, disponivel = ? WHERE id = ?");
    $stmt->bind_param("ssssii", $nome, $categoria, $patrimonio, $estado, $disponivel, $id);

    if ($stmt->execute()) {
        header("Location: listar.php");
        exit;
    } else {
        echo "<p>Erro ao atualizar: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>
<link rel="stylesheet" href="style.css">