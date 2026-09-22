<?php
function calcularTotal($preco, $quantidade) {
    return $preco * $quantidade; 
}
$precoProduto = 123.99; 
$qtdComprada = 3; 
$total = calcularTotal($precoProduto, $qtdComprada); 
echo "Valor total da compra: R$ " . $total; 
?>