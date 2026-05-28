<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__.'/../bootstrap/App.php';

// $app->add(TwigMiddleware::create($app, $twig));

$app = AppFactory::create();

$app->addRoutingMiddleware();

$app->add(TwigMiddleware::createFromContainer($app, Twig::class));

require __DIR__.'/../routes/route.php';

$app->addErrorMiddleware(true, true, true);

$app->run();
