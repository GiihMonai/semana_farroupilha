<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano'];
    $nota = $_POST['nota'];
    $assistida = $_POST['assistida'];

    $sql = "UPDATE series SET 
            titulo = '$titulo', 
            genero = '$genero', 
            plataforma = '$plataforma', 
            ano = $ano, 
            nota = $nota, 
            assistida = $assistida 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: listar.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>