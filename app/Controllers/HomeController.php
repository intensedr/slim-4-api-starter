<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, Response $response, $args): Response
    {
        $response->getBody()->write(json_encode(['Hello ps!']));
       
        return $response->withHeader('Content-Type', 'application/json');
    }
}