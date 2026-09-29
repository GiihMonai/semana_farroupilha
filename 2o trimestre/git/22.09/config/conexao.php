<?php
$host = 'localhost';
$db   = 'churrasco';
$user = 'root'; // Altera de 'admin@ifrs.edu.br' para 'root'
$pass = '';     // Deixa vazio se usas o XAMPP padrão (ou coloca a tua senha do MySQL se definiste uma)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>