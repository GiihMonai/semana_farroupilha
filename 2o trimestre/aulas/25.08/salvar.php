<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano'];
    $nota = $_POST['nota'];
    $assistida = $_POST['assistida'];

    $sql = "INSERT INTO series (titulo, genero, plataforma, ano, nota, assistida) 
            VALUES ('$titulo', '$genero', '$plataforma', $ano, $nota, $assistida)";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Série cadastrada com sucesso!</h3>";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>
<br>
<a href="listar.php">Voltar para a lista de séries</a>
