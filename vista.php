<?php
header("Content-Type: application/json"); // Indicamos que es JSON
header("Access-Control-Allow-Origin: *"); // Permitir peticiones desde cualquier origen

include 'config.php';

// Determinar qué tabla consultar según el parámetro GET
$table = isset($_GET['table']) ? $_GET['table'] : '';

if (!in_array($table, ['clientes', 'inventario', 'ventas'])) {
    echo json_encode(["error" => "Tabla no válida"]);
    exit;
}

// Consultar los datos de la tabla seleccionada
$sql = "SELECT * FROM $table";
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los datos en formato JSON
echo json_encode($data);
?>
