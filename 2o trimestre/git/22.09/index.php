<?php
require_once 'includes/verificar_login.php';
require_once 'config/conexao.php';

// Exercício 16: Consultas calculadas diretamente no banco de dados
$totalInscritos = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();
$confirmados    = $pdo->query("SELECT COUNT(*) FROM participantes WHERE confirmado = 1")->fetchColumn();
$naoConfirmados = $pdo->query("SELECT COUNT(*) FROM participantes WHERE confirmado = 0")->fetchColumn();
$pagos          = $pdo->query("SELECT COUNT(*) FROM participantes WHERE pago = 1")->fetchColumn();
$pendentes      = $pdo->query("SELECT COUNT(*) FROM participantes WHERE pago = 0")->fetchColumn();
$tradicional    = $pdo->query("SELECT COUNT(*) FROM participantes WHERE tipo_churrasco = 'Tradicional'")->fetchColumn();
$vegetariano    = $pdo->query("SELECT COUNT(*) FROM participantes WHERE tipo_churrasco = 'Vegetariano'")->fetchColumn();

// Ajuste nos caminhos de visualização do cabeçalho quando na raiz
require_once 'includes/cabecalho.php';
?>

<div class="dashboard">
    <h2>CHURRASCO DA SEMANA FARROUPILHA</h2>
    
    <div class="cards-resumo">
        <div class="card">
            <h3>Total de inscritos</h3>
            <p class="numero"><?php echo $totalInscritos; ?></p>
        </div>
        <div class="card">
            <h3>Confirmados</h3>
            <p class="numero"><?php echo $confirmados; ?></p>
        </div>
        <div class="card">
            <h3>Não confirmados</h3>
            <p class="numero"><?php echo $naoConfirmados; ?></p>
        </div>
        <div class="card">
            <h3>Pagamentos realizados</h3>
            <p class="numero"><?php echo $pagos; ?></p>
        </div>
        <div class="card">
            <h3>Pagamentos pendentes</h3>
            <p class="numero"><?php echo $pendentes; ?></p>
        </div>
        <div class="card">
            <h3>Churrasco tradicional</h3>
            <p class="numero"><?php echo $tradicional; ?></p>
        </div>
        <div class="card">
            <h3>Vegetariano</h3>
            <p class="numero"><?php echo $vegetariano; ?></p>
        </div>
    </div>

    <div class="acoes-rapidas">
        <a href="participantes/cadastrar.php" class="btn">Nova inscrição</a>
        <a href="participantes/listar.php" class="btn">Participantes</a>
        <a href="auth/logout.php" class="btn btn-danger">Sair</a>
    </div>
</div>

<?php require_once 'includes/rodape.php'; ?>