<?php
function dobrarNumero(int $numero) {
    return $numero * 2; 
}
echo "O dobro de 5 é: " . dobrarNumero(5); 

// Teste c/ string
// echo dobrarNumero("dez"); 
// "TypeError" se o modo strict estiver ativo ou se a string não for numérica.
?>