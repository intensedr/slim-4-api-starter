<?php

use App\Middleware\AppMiddleware;

$app->get('/', \App\Controllers\HomeController::class)->add(new AppMiddleware($container));