<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/Modules',
        __DIR__ . '/app/*',
        __DIR__ . '/public',
    ])
    ->withTypeCoverageLevel(3)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(3);

