<?php
session_start();

$produtos = [
    ['id' => 0, 'nome' => 'Cavalo Retrô', 'preco' => 5000.00],
    ['id' => 1, 'nome' => 'BMW Futurista', 'preco' => 3000000.00],
    ['id' => 2, 'nome' => 'Cabo de Vassoura Pixelado', 'preco' => 100000.00]
];

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_POST['adicionar'])) {
    $id = $_POST['produto_id'];
    $_SESSION['carrinho'][] = $produtos[$id];
}

if (isset($_GET['remover'])) {
    $index = $_GET['remover'];
    unset($_SESSION['carrinho'][$index]);
    $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
    header("Location: carrinhocompra.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrinho Simples</title>
</head>
<body>
    <h2>Produtos Disponíveis</h2>
    <?php foreach ($produtos as $chave => $p): ?>
        <p>
            <?php echo $p['nome']; ?> - R$ <?php echo $p['preco']; ?>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="produto_id" value="<?php echo $chave; ?>">
                <button type="submit" name="adicionar">Adicionar ao carrinho</button> 
            </form>
        </p>
    <?php endforeach; ?>

    <hr>

    <h2>Itens no Carrinho</h2>
    <ul>
        <?php 
        $totalValor = 0;
        $totalItens = 0;

        foreach ($_SESSION['carrinho'] as $index => $item): 
            $totalValor += $item['preco']; 
            $totalItens++; 
        ?>
            <li>
                <?php echo $item['nome']; ?> - R$ <?php echo $item['preco']; ?> 
                <a href="?remover=<?php echo $index; ?>">[Remover]</a> 
            </li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Total de itens:</strong> <?php echo $totalItens; ?></p>
    <p><strong>Valor Total:</strong> R$ <?php echo $totalValor; ?></p>
</body>
</html>