<?php

declare(strict_types=1);

namespace App\Providers;

use DI\Container;
use Psr\Log\LoggerInterface;
use Slim\App;
use Slim\Factory\AppFactory;

class AppServiceProvider
{
    public static function create(): App
    {
        $container = new Container();
        $container->set(LoggerInterface::class, LoggingServiceProvider::boot());

        return AppFactory::create(container: $container);
    }
}