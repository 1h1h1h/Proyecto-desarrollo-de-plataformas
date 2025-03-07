<?php
// Leer el archivo .env manualmente
$env = parse_ini_file(__DIR__ . '/../../.env');

return [
    'DB_HOST' => $env['DB_HOST'],
    'DB_NAME' => $env['DB_NAME'],
    'DB_USER' => $env['DB_USER'],
    // 'DB_PASS' => $env['DB_PASS'],
    'DB_PORT' => $env['DB_PORT'],
    'PORT'    => $env['PORT'],
];
?>