<?php
function calcularMedia(float $nota1, float $nota2): float {
    return ($nota1 + $nota2) / 2;
}

function verificarSituacao(float $media): string {
    if ($media >= 7) return "Aprovado"; 
    if ($media >= 5) return "Recuperação"; 
    return "Reprovado"; 
}

$n1 = 8.5; 
$n2 = 6.0; 
$m = calcularMedia($n1, $n2); 

echo "Média: $m <br>"; 
echo "Situação: " . verificarSituacao($m); 
?>