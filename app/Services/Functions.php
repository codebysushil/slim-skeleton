<?php

declare(strict_types=1);

use Slim\Views\Twig;

function view($request, $response, $path)
{
    $view = Twig::fromRequest($request);
    return $view->render($response, $path.'.twig');
}
