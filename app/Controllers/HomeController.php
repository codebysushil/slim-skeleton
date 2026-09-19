<?php

declare(strict_types=1);

namespace Slim\App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class HomeController extends BaseController
{
    public function index(Request $request, Response $response
    ): Response {
        return view(
            $request,
            $response,
            'welcome'
        );
    }
}
