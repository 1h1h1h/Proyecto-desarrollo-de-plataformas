<?php
require __DIR__ . '/server.php';

// Conectar a la base de datos
$conn = require __DIR__ . '/src/db/connection.php';

// Iniciar el servidor
startServer($conn);
?>