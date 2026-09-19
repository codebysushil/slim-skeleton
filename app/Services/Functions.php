<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

function view(Request $request, Response $response, string $path): Response
{
    $view = Twig::fromRequest($request);

    return $view->render($response, $path.'.twig');
}
