<?php
require_once '../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $turma = trim($_POST['turma']);
    $telefone = trim($_POST['telefone']);
    $tipo_churrasco = $_POST['tipo_churrasco'];
    $acompanhamento = $_POST['acompanhamento'] ?? '';
    $confirmado = (int)$_POST['confirmado'];
    $pago = (int)$_POST['pago'];

    $sql = "INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) 
            VALUES (:nome, :turma, :telefone, :tipo_churrasco, :acompanhamento, :confirmado, :pago)";
    
    $stmt = $pdo->prepare($sql);
    $executou = $stmt->execute([
        ':nome' => $nome,
        ':turma' => $turma,
        ':telefone' => $telefone,
        ':tipo_churrasco' => $tipo_churrasco,
        ':acompanhamento' => $acompanhamento,
        ':confirmado' => $confirmado,
        ':pago' => $pago
    ]);

    if ($executou) {
        header('Location: listar.php?msg=sucesso');
        exit;
    }
}
?>