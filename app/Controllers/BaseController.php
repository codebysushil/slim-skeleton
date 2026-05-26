<?php

declare(strict_types=1);

namespace Slim\App\Controllers;

abstract class BaseController
{
    abstract public function index(): mixed;
}
