<?php

use Psr\Http\Message\ResponseInterface as Response; // Importamos la interfaz de respuesta
use Psr\Http\Message\ServerRequestInterface as Request; // Importamos la interfaz de solicitud
use App\Models\User; 

$app->get('/registration_db', function (Request $request, Response $response) {
    try {
        $users = User::all(); // Se consultan todos los usuarios
        $response->getBody()->write($users->toJson()); 
        return $response->withHeader('Content-Type', 'application/json');
    } catch (\Exception $e) {
        // Mostrar la excepción si algo falla
        $error = [
            'message' => 'Error al conectar con la base de datos',
            'error' => $e->getMessage()
        ];
        $response->getBody()->write(json_encode($error));
        return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
    }
});