<?php

declare(strict_types=1);

use Slim\App\Controllers\HomeController;

$app->get('/', [HomeController::class, 'index']);
