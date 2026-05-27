<?php

namespace Slim\App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class HomeController extends BaseController
{
    public function index(Request $request, Response $response, array $args): Response
    {
        $view = Twig::requestFrom($request);

        return $view->render($response, 'welcome.twig', ['name' => 'php']);
    }
}
