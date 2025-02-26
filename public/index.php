<?php

use App\Providers\AppServiceProvider;
use App\Providers\DatabaseServiceProvider;
use App\Providers\RouteServiceProvider;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$dotenv = Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

$app = AppServiceProvider::create();
DatabaseServiceProvider::boot();
RouteServiceProvider::boot($app);

$app->addRoutingMiddleware();
$app->addErrorMiddleware(getenv('APP_DEBUG'), true, true);

$app->run();