<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$app->get('/', function (
    Request $request,
    Response $response
) {
    $view = Twig::fromRequest($request);

    return $view->render($response, 'welcome.twig');
});
