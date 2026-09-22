<?php
$produto = "Buquê de Flores"; 
$precoUnitario = 300.00;
$quantidade = 8;

$total = $precoUnitario * $quantidade;

echo "Produto: $produto <br>"; 
echo "Preço unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";
echo "Quantidade: $quantidade <br>"; 
echo "Total: R$ " . number_format($total, 2, ',', '.');
?>