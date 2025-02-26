<?php

declare(strict_types=1);

namespace App\Providers;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class LoggingServiceProvider
{
    public static function boot(): LoggerInterface
    {
        $logger = new Logger(getenv('APP_NAME'));

        $dateFormat = 'Y-m-d H:i:s.v';
        $output = "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n";
        $formatter = new LineFormatter($output, $dateFormat);
        $logFile = dirname(__DIR__, 2) . '/storage/logs/app.log';
        $rotatingHandler = new RotatingFileHandler($logFile, 0, Level::Debug);
        $rotatingHandler->setFormatter($formatter);
        $logger->pushHandler($rotatingHandler);

        return $logger;
    }
}