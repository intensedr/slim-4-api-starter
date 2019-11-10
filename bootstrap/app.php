<?php

use DI\Container;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

try {
    (Dotenv\Dotenv::create(__DIR__ . '/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

require_once __DIR__ . '/../config/config.php';

$container = new Container();

AppFactory::setContainer($container);

$app = AppFactory::create();
$app->setBasePath($config['base']);

require_once __DIR__ . '/dependencies.php';
require_once __DIR__ . '/../routes/api.php';