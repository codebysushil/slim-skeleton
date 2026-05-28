<?php

declare(strict_types=1);

use Slim\App\Controllers\HomeController;
use Slim\App\Controllers\LoginController;
use Slim\App\Controllers\RegisterController;

$app->get('/', [HomeController::class, 'index']);

$app->get('/login', [LoginController::class, 'index']);

$app->get('/register', [RegisterController::class, 'index']);

/*
$app->get('/', function (
    Request $request,
    Response $response
) {
    $view = Twig::fromRequest($request);

    return $view->render($response, 'welcome.twig');
}); */
