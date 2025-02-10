<?php
use App\Core\Router;
use App\controllers\front\AuthController;

$router = new Router();

// Routes

// $router->get('', [HomeController::class, 'index']);
$router->get('Auth/login', [AuthController::class, 'showLogin']);
$router->get('', function() {
    echo "Bienvenue sur la page d'accueil";
});

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);