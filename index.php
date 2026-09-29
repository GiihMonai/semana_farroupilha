<?php
require_once 'config/conexao.php';

$total = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();
$confirmados = $pdo->query("SELECT COUNT(*) FROM participantes WHERE confirmado = 1")->fetchColumn();
$nao_confirmados = $pdo->query("SELECT COUNT(*) FROM participantes WHERE confirmado = 0")->fetchColumn();
$pagos = $pdo->query("SELECT COUNT(*) FROM participantes WHERE pago = 1")->fetchColumn();
$pendentes = $pdo->query("SELECT COUNT(*) FROM participantes WHERE pago = 0")->fetchColumn();
$tradicional = $pdo->query("SELECT COUNT(*) FROM participantes WHERE tipo_churrasco = 'Tradicional'")->fetchColumn();
$vegetariano = $pdo->query("SELECT COUNT(*) FROM participantes WHERE tipo_churrasco = 'Vegetariano'")->fetchColumn();

include 'includes/cabecalho.php';
?>

<section class="dashboard">
    <h2>Resumo das Inscrições</h2>
    
    <div class="cards-grid">
        <div class="card">
            <h3>Total de inscritos</h3>
            <p class="number"><?= $total; ?></p>
        </div>
        <div class="card">
            <h3>Presença</h3>
            <p>Confirmados: <strong><?= $confirmados; ?></strong></p>
            <p>Não confirmados: <strong><?= $nao_confirmados; ?></strong></p>
        </div>
        <div class="card">
            <h3>Pagamentos</h3>
            <p>Realizados: <strong><?= $pagos; ?></strong></p>
            <p>Pendentes: <strong><?= $pendentes; ?></strong></p>
        </div>
        <div class="card">
            <h3>Cardápio</h3>
            <p>Tradicional: <strong><?= $tradicional; ?></strong></p>
            <p>Vegetariano: <strong><?= $vegetariano; ?></strong></p>
        </div>
    </div>

    <div class="actions">
        <a href="participantes/cadastrar.php" class="btn btn-primary">Nova Inscrição</a>
        <a href="participantes/listar.php" class="btn btn-secondary">Ver Participantes</a>
    </div>
</section>

<?php include 'includes/rodape.php'; ?>