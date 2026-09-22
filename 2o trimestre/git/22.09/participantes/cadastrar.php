<?php
require_once '../includes/verificar_login.php';
require_once '../includes/cabecalho.php';
?>

<div class="container-form">
    <h2>Cadastrar Participante</h2>

    <?php if (isset($_GET['sucesso'])): ?>
        <div class="mensagem-sucesso">Participante cadastrado com sucesso!</div>
    <?php endif; ?>

    <form action="salvar.php" method="POST" id="formCadastro">
        <div class="campo-form">
            <label for="nome">Nome Completo *:</label>
            <input type="text" id="nome" name="nome">
        </div>

        <div class="campo-form">
            <label for="turma">Turma *:</label>
            <input type="text" id="turma" name="turma" placeholder="Ex: INFO 2">
        </div>

        <div class="campo-form">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone">
        </div>

        <div class="campo-form">
            <label for="tipo_churrasco">Tipo de Churrasco *:</label>
            <select id="tipo_churrasco" name="tipo_churrasco">
                <option value="">Selecione...</option>
                <option value="Tradicional">Tradicional</option>
                <option value="Vegetariano">Vegetariano</option>
            </select>
        </div>

        <div class="campo-form">
            <label for="acompanhamento">Acompanhamento:</label>
            <input type="text" id="acompanhamento" name="acompanhamento" placeholder="Ex: Salada, Arroz, Pão">
        </div>

        <div class="campo-form">
            <label>Presença Confirmada *:</label>
            <label><input type="radio" name="confirmado" value="1"> Sim</label>
            <label><input type="radio" name="confirmado" value="0" checked> Não</label>
        </div>

        <div class="campo-form">
            <label>Pagamento Realizado *:</label>
            <label><input type="radio" name="pago" value="1"> Sim</label>
            <label><input type="radio" name="pago" value="0" checked> Não</label>
        </div>

        <button type="submit" class="btn-submit">Salvar Inscrição</button>
    </form>
</div>

<script src="../js/script.js"></script>
<?php require_once '../includes/rodape.php'; ?>