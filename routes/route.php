<?php

declare(strict_types=1);

use Slim\App\Controllers\HomeController;

$app->get('/', [HomeController::class, 'index']);

/*
$app->get('/', function (
    Request $request,
    Response $response
) {
    $view = Twig::fromRequest($request);

    return $view->render($response, 'welcome.twig');
}); */
