<?php
$estoque = [
    ["produto" => "Mouse", "vendas" => 150],
    ["produto" => "Teclado", "vendas" => 85],
    ["produto" => "Monitor", "vendas" => 210],
    ["produto" => "Fone", "vendas" => 125]
];

$totalVendas = 0;
$maisVendido = $estoque[0]; 

echo "Relatório de Vendas";

foreach ($estoque as $item) {
    echo " Produto: {$item['produto']} | Vendas: {$item['vendas']}";
    
    $totalVendas += $item['vendas'];
    
    if ($item['vendas'] > $maisVendido['vendas']) {
        $maisVendido = $item;
    }
}

$mediaVendas = $totalVendas / count($estoque);

echo " Média de Vendas: " . number_format($mediaVendas, 2, ',', '.');
echo " Produto Mais Vendido: " . $maisVendido['produto'] . " (" . $maisVendido['vendas'] . " unidades)";

?>

<!-- esqueci completamente como deixa espaço nesse negócio AAAAAAAAAAAAAAAA -->