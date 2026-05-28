<?php

declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

$container = new Container();

// $container->build();

AppFactory::setContainer($container);

$twig = Twig::create(__DIR__.'/../views/templates', [
    'cache' => __DIR__.'/../storage/cache/twig',
    'auto_reload' => true,
]);

/*
$containerBuilder->addDefinitions([
    Twig::class => function () {
        $templatesPath = __DIR__.'/../views/templates';

        $settings = [
            'cache' => __DIR__.'/../storage/cache/twig',
            'auto_reload' => true,
        ];

        return Twig::create($templatesPath, $settings);
    },
    'view' => \DI\get(Twig::class),
]);

$container = $containerBuilder->build();

AppFactory::setContainer($container);
 */
