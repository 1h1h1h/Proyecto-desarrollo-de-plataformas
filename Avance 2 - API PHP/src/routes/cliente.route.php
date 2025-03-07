<?php
require_once __DIR__ . '/../controllers/Cliente.controller.php';

function handleClienteRoutes($method, $uri, $conn) {
    $clienteController = new ClienteController($conn);

    switch ($method) {
        case 'GET':
            if ($uri === '/clientes') {
                echo json_encode($clienteController->getAll());
            } elseif (preg_match('/\/clientes\/(\d+)/', $uri, $matches)) {
                $id = $matches[1];
                echo json_encode($clienteController->getById($id));
            }
            break;

        case 'POST':
            if ($uri === '/clientes') {
                $data = json_decode(file_get_contents('php://input'), true);
                echo json_encode($clienteController->create($data));
            }
            break;

        default:
            header("HTTP/1.1 405 Method Not Allowed");
            echo json_encode(['error' => 'Método no permitido']);
            break;
    }
}
?>