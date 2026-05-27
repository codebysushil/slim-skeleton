<?php

require_once __DIR__.'/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$app = AppFactory::create();

require __DIR__ . '/../bootstrap/App.php';
require __DIR__ . '/../routes/route.php';

$app->add(TwigMiddleware::create($app, $twig));

$app->run();
