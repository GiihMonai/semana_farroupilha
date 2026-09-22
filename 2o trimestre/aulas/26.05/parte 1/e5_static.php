<?php
class Contador {
 // Propriedade estática
 public static $total = 0;
 // Método estático
 public static function incrementar() {
 self::$total++;
 }
 public static function mostrarTotal() {
 return "O total é: " . self::$total;
 }
}
// Não precisamos criar objetos
Contador::incrementar();
Contador::incrementar();
echo Contador::mostrarTotal(); // O total é: 2
// Podemos acessar diretamente a propriedade estática
echo "<br>";
echo "Valor atual de Contador: " . Contador::$total; // 2
?>
