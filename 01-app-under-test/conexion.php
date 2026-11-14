<?php
$host = 'localhost'; // O tu host de InfinityFree
$dbname = 'your_database_name';  
$username = 'your_username';
$password = 'your_password_here'; // Nunca pongas la real aquí

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
