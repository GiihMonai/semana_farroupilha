<?php
require_once 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM series WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: listar.php");
        exit();
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>