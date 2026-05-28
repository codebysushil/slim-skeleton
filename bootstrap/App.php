<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

$containerBuilder = new ContainerBuilder;

// AppFactory::setContainer($container);

// $twig = Twig::create(__DIR__.'/../views/templates', ['cache' => false]);

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
