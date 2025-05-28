<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule; 

// Configuración de base de datos desde .env
$capsule->addConnection([
    'driver' => $_ENV['DB_CONNECTION'] ?? 'mysql',
    'host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
    'port' => $_ENV['DB_PORT'] ?? '3306',
    'database' => $_ENV['DB_DATABASE'] ?? 'registration_db',
    'username' => $_ENV['DB_USERNAME'] ?? 'root',
    'password' => $_ENV['DB_PASSWORD'] ?? '',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
]);

// Hacer que Eloquent esté disponible globalmente
$capsule->setAsGlobal();

// Iniciar Eloquent
$capsule->bootEloquent();

return $capsule;

