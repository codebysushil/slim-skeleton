<?php

require_once __DIR__.'/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$container = new DI\Container;

AppFactory::setContainer($container);

$app = AppFactory::create();

$container = $app->getContainer();

$twig = Twig::create(__DIR__.'/../views/templates', [
    'cache' => __DIR__.'/../storage/cache/twig',
    'auto_reload' => true,
]);

$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', function (
    Request $request,
    Response $response
) {
    $view = Twig::fromRequest($request);

    return $view->render($response, 'welcome.html.twig', [
        'title' => 'Welcome to Slim Skeleton.',
        'message' => 'Welcome to Slim 4!',
    ]);
});

$app->run();
