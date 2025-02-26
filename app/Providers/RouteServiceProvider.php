<?php

declare(strict_types=1);

namespace App\Providers;

use Slim\App;

class RouteServiceProvider
{
    public static function boot(App $app): void
    {
        foreach (glob(dirname(__DIR__, 2) . '/Modules/*/Routes/*.php') as $routeFile) {
            $routeDefinition = require $routeFile;
            if (is_callable($routeDefinition)) {
                $routeDefinition($app);
            }
        }
    }
}
