<?php
use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Middleware opcional, por ejemplo para manejar rutas base
// $app->setBasePath("/Registration_Service/public");

return $app;