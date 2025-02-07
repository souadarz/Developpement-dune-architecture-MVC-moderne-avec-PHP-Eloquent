<?php
use App\Core\Router;
use App\controllers\front\AuthController;

$router = new Router();

// // Routes simples

// $router->get('', [HomeController::class, 'index']);
$router->get('Auth/login', [AuthController::class, 'showLogin']);
$router->get('', function() {
    echo "Bienvenue sur la page d'accueil";
});
$router->get('test2', function() {
    echo "2eme test";
});

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);