<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Cargamos el .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Iniciamos el Slim
$app = require __DIR__ . '/../src/app.php';

// Conectamos base de datos
require __DIR__ . '/../src/config/database.php';

// Cargamos las rutas
require __DIR__ . '/../src/routes.php';

$app->run();

