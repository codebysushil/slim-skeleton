<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$container = new DI\Container;

AppFactory::setContainer($container);

// $app = AppFactory::create();

// $container = $app->getContainer();

$twig = Twig::create(__DIR__ . '/../views/templates', [
    'cache' => __DIR__.'/../storage/cache/twig',
    'auto_reload' => true,
]);

