<?php
require_once '../config/conexao.php';

$acao = $_REQUEST['acao'] ?? '';

if ($acao === 'editar_completo' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $nome = trim($_POST['nome']);
    $turma = trim($_POST['turma']);
    $telefone = trim($_POST['telefone']);
    $tipo_churrasco = $_POST['tipo_churrasco'];
    $acompanhamento = $_POST['acompanhamento'];
    $confirmado = (int)$_POST['confirmado'];
    $pago = (int)$_POST['pago'];

    $sql = "UPDATE participantes SET nome = :nome, turma = :turma, telefone = :telefone, 
            tipo_churrasco = :tipo_churrasco, acompanhamento = :acompanhamento, 
            confirmado = :confirmado, pago = :pago WHERE id = :id";
            
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nome' => $nome,
        ':turma' => $turma,
        ':telefone' => $telefone,
        ':tipo_churrasco' => $tipo_churrasco,
        ':acompanhamento' => $acompanhamento,
        ':confirmado' => $confirmado,
        ':pago' => $pago,
        ':id' => $id
    ]);

} elseif ($acao === 'alternar_presenca') {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("UPDATE participantes SET confirmado = NOT confirmado WHERE id = :id");
    $stmt->execute([':id' => $id]);

} elseif ($acao === 'alternar_pagamento') {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("UPDATE participantes SET pago = NOT pago WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

header('Location: listar.php?msg=sucesso');
exit;
?>