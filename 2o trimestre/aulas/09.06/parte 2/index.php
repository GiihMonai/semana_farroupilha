<?php
session_start();

require_once 'contacorr.php';
require_once 'contapoup.php';

$mensagemSucesso = "";
$mensagemErro = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'criar_cc') {
        $numero = trim($_POST['numero'] ?? '');
        $titular = trim($_POST['titular'] ?? '');
        $saldo = floatval($_POST['saldo'] ?? 0);

        if (!empty($numero) && !empty($titular) && $saldo >= 0) {
            $_SESSION['cc'] = serialize(new ContaCorrente($numero, $titular, $saldo));
            $mensagemSucesso = "Conta Corrente criada com sucesso!";
        } else {
            $mensagemErro = "Erro ao criar Conta Corrente. Verifique os dados inseridos.";
        }
    }

    if ($acao === 'criar_cp') {
        $numero = trim($_POST['numero'] ?? '');
        $titular = trim($_POST['titular'] ?? '');
        $saldo = floatval($_POST['saldo'] ?? 0);

        if (!empty($numero) && !empty($titular) && $saldo >= 0) {
            $_SESSION['cp'] = serialize(new ContaPoupanca($numero, $titular, $saldo));
            $mensagemSucesso = "Conta Poupança criada com sucesso!";
        } else {
            $mensagemErro = "Erro ao criar Conta Poupança. Verifique os dados inseridos.";
        }
    }

    $cc = isset($_SESSION['cc']) ? unserialize($_SESSION['cc']) : null;
    $cp = isset($_SESSION['cp']) ? unserialize($_SESSION['cp']) : null;

    if ($cc) {
        if ($acao === 'deposito_cc') {
            $valor = floatval($_POST['valor'] ?? 0);
            if ($cc->depositar($valor)) {
                $mensagemSucesso = "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado na Conta Corrente!";
                $_SESSION['cc'] = serialize($cc);
            } else {
                $mensagemErro = "Valor de depósito inválido para a Conta Corrente.";
            }
        }
        if ($acao === 'saque_cc') {
            $valor = floatval($_POST['valor'] ?? 0);
            if ($cc->sacar($valor)) {
                $mensagemSucesso = "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado na Conta Corrente!";
                $_SESSION['cc'] = serialize($cc);
            } else {
                $mensagemErro = "Saldo insuficiente ou valor inválido para saque na Conta Corrente.";
            }
        }
        if ($acao === 'mensal_cc') {
            if ($cc->aplicarOperacaoMensal()) {
                $mensagemSucesso = "Tarifa mensal de R$ 10,00 debitada com sucesso!";
                $_SESSION['cc'] = serialize($cc);
            } else {
                $mensagemErro = "Saldo insuficiente para aplicar a tarifa mensal de R$ 10,00.";
            }
        }
    }

    if ($cp) {
        if ($acao === 'deposito_cp') {
            $valor = floatval($_POST['valor'] ?? 0);
            if ($cp->depositar($valor)) {
                $mensagemSucesso = "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado na Conta Poupança!";
                $_SESSION['cp'] = serialize($cp);
            } else {
                $mensagemErro = "Valor de depósito inválido para a Conta Poupança.";
            }
        }
        if ($acao === 'saque_cp') {
            $valor = floatval($_POST['valor'] ?? 0);
            if ($cp->sacar($valor)) {
                $mensagemSucesso = "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado na Conta Poupança!";
                $_SESSION['cp'] = serialize($cp);
            } else {
                $mensagemErro = "Saldo insuficiente ou valor inválido para saque na Conta Poupança.";
            }
        }
        if ($acao === 'mensal_cp') {
            $rendimento = $cp->aplicarOperacaoMensal();
            if ($rendimento > 0) {
                $mensagemSucesso = "Rendimento de 5% aplicado! Gerou: R$ " . number_format($rendimento, 2, ',', '.');
                $_SESSION['cp'] = serialize($cp);
            } else {
                $mensagemErro = "A conta poupança não possui saldo suficiente para render.";
            }
        }
    }

    if ($acao === 'limpar') {
        session_destroy();
        header("Location: index.php");
        exit();
    }
} else {
    $cc = isset($_SESSION['cc']) ? unserialize($_SESSION['cc']) : null;
    $cp = isset($_SESSION['cp']) ? unserialize($_SESSION['cp']) : null;
}

function formataReal($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Bancário Interativo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Sistema Bancário Interativo</h1>

    <?php if (!empty($mensagemSucesso)): ?>
        <div class="alerta sucesso-box"><?= $mensagemSucesso ?></div>
    <?php endif; ?>

    <?php if (!empty($mensagemErro)): ?>
        <div class="alerta erro-box"><?= $mensagemErro ?></div>
    <?php endif; ?>

    <div class="layout-grid">
        
        <div class="coluna">
            <h2>Conta Corrente</h2>
            
            <?php if (!$cc): ?>
                <div class="container">
                    <form method="POST">
                        <input type="hidden" name="acao" value="criar_cc">
                        <label>Número da Conta:</label>
                        <input type="text" name="numero" required placeholder="Ex: 12345">
                        
                        <label>Titular:</label>
                        <input type="text" name="titular" required placeholder="Nome do titular">
                        
                        <label>Saldo Inicial:</label>
                        <input type="number" name="saldo" step="0.01" min="0" required value="0.00">
                        
                        <button type="submit" class="btn">Criar Conta</button>
                    </form>
                </div>
            <?php else: ?>
                <div class="dados-conta">
                    <p>Titular: <?= $cc->getTitular() ?></p>
                    <p>Número: <?= $cc->getNumeroConta() ?></p>
                    <p>Saldo Atual: <span class="saldo-valor"><?= formataReal($cc->getSaldo()) ?></span></p>
                </div>

                <div class="container">
                    <p>Movimentações</p>
                    <form method="POST" class="form-operacao">
                        <input type="number" name="valor" step="0.01" min="0.01" placeholder="Valor R$" required>
                        <div class="botoes-grupo">
                            <button type="submit" name="acao" value="deposito_cc" class="btn btn-sucesso">Depositar</button>
                            <button type="submit" name="acao" value="saque_cc" class="btn btn-erro">Sacar</button>
                        </div>
                    </form>
                    <hr>
                    <form method="POST">
                        <button type="submit" name="acao" value="mensal_cc" class="btn btn-bloco">Aplicar Tarifa Mensal (R$ 10,00)</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>

        <div class="coluna">
            <h2>Conta Poupança</h2>
            
            <?php if (!$cp): ?>
                <div class="container">
                    <form method="POST">
                        <input type="hidden" name="acao" value="criar_cp">
                        <label>Número da Conta:</label>
                        <input type="text" name="numero" required placeholder="Ex: 12345">
                        
                        <label>Titular:</label>
                        <input type="text" name="titular" required placeholder="Nome do titular">
                        
                        <label>Saldo Inicial:</label>
                        <input type="number" name="saldo" step="0.01" min="0" required value="0.00">
                        
                        <button type="submit" class="btn">Criar Conta</button>
                    </form>
                </div>
            <?php else: ?>
                <div class="dados-conta">
                    <p><b>Titular:</b> <?= $cp->getTitular() ?></p>
                    <p><b>Número:</b> <?= $cp->getNumeroConta() ?></p>
                    <p><b>Saldo Atual:</b> <span class="saldo-valor"><?= formataReal($cp->getSaldo()) ?></span></p>
                </div>

                <div class="container">
                    <p>Movimentações</p>
                    <form method="POST" class="form-operacao">
                        <input type="number" name="valor" step="0.01" min="0.01" placeholder="Valor R$" required>
                        <div class="botoes-grupo">
                            <button type="submit" name="acao" value="deposito_cp" class="btn btn-sucesso">Depositar</button>
                            <button type="submit" name="acao" value="saque_cp" class="btn btn-erro">Sacar</button>
                        </div>
                    </form>
                    <hr>
                    <form method="POST">
                        <button type="submit" name="acao" value="mensal_cp" class="btn btn-bloco">Aplicar Rendimento Mensal (5%)</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <div style="text-align: center; margin-top: 30px;">
        <form method="POST">
            <button type="submit" name="acao" value="limpar" class="btn-limpar">Limpar e Resetar Sistema</button>
        </form>
    </div>

</body>
</html>