<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome          = trim($_POST['nome']);
    $turma         = trim($_POST['turma']);
    $telefone      = trim($_POST['telefone']);
    $tipo_churrasco = trim($_POST['tipo_churrasco']);
    $acompanhamento = trim($_POST['acompanhamento']);
    $confirmado    = (int)$_POST['confirmado'];
    $pago          = (int)$_POST['pago'];

    $sql = "INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) 
            VALUES (:nome, :turma, :telefone, :tipo_churrasco, :acompanhamento, :confirmado, :pago)";
    
    $stmt = $pdo->prepare($sql);
    $executado = $stmt->execute([
        ':nome'          => $nome,
        ':turma'         => $turma,
        ':telefone'      => $telefone,
        ':tipo_churrasco' => $tipo_churrasco,
        ':acompanhamento' => $acompanhamento,
        ':confirmado'    => $confirmado,
        ':pago'          => $pago
    ]);

    if ($executado) {
        header("Location: cadastrar.php?sucesso=1");
        exit();
    }
}
?>