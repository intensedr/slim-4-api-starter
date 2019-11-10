<?php

declare(strict_types=1);

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

class AppMiddleware
{
    private $container;

    public function __construct($container) 
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        return $handler->handle($request);
    }
}