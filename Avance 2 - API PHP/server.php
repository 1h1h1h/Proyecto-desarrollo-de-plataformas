<?php
// Incluir archivos necesarios
require __DIR__ . '/src/db/connection.php';
require __DIR__ . '/src/routes/index.php';

function startServer($conn): void {
    // Obtener el método HTTP y la URI
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Enrutamiento basado en la URI
    switch ($uri) {
        case '/clientes':
        case preg_match('/\/clientes\/(\d+)/', $uri, $matches) ? $uri : '':
            handleClienteRoutes($method, $uri, $conn);
            break;

        case '/inventario':
        case preg_match('/\/inventario\/(\d+)/', $uri, $matches) ? $uri : '':
            handleInventarioRoutes($method, $uri, $conn);
            break;

        case '/ventas':
        case preg_match('/\/ventas\/(\d+)/', $uri, $matches) ? $uri : '':
            handleVentaRoutes($method, $uri, $conn);
            break;

        // Ruta no encontrada
        default:
            header("HTTP/1.1 404 Not Found");
            echo json_encode(['error' => 'Ruta no encontrada']);
            break;
    }
}
?>