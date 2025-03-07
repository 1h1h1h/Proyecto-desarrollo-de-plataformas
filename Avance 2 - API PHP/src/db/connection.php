<?php
require_once __DIR__ . '/../config/config.php';

$config = require __DIR__ . '/../config/config.php';

$host = $config['DB_HOST'];
$dbname = $config['DB_NAME'];
$user = $config['DB_USER'];
$pass = $config['DB_PASS'];
$port = $config['DB_PORT'];

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>