<?php
function dividir($a, $b) { 
    if ($b == 0) {
        return "Erro: Divisão por zero!";
    }
    return $a / $b;
}
$n1 = 10;
$n2 = 0;
echo "Resultado: " . dividir($n1, $n2); 
?>