<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$moduleMigrations = glob(__DIR__ . '/Modules/*/Migrations', GLOB_ONLYDIR);
$moduleSeeds = glob(__DIR__ . '/Modules/*/Seeds', GLOB_ONLYDIR);

return [
    'paths' => [
        'migrations' => $moduleMigrations,
        'seeds' => $moduleSeeds,
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => getenv('DB_CONNECTION') ?: 'mysql',
            'host' => getenv('DB_HOST') ?: 'localhost',
            'name' => getenv('DB_DATABASE') ?: 'production_db',
            'user' => getenv('DB_USERNAME') ?: 'root',
            'pass' => getenv('DB_PASSWORD') ?: '',
            'port' => getenv('DB_PORT') ?: '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => getenv('DB_CONNECTION') ?: 'mysql',
            'host' => getenv('DB_HOST') ?: 'localhost',
            'name' => getenv('DB_DATABASE') ?: 'development_db',
            'user' => getenv('DB_USERNAME') ?: 'root',
            'pass' => getenv('DB_PASSWORD') ?: '',
            'port' => getenv('DB_PORT') ?: '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => getenv('DB_CONNECTION') ?: 'mysql',
            'host' => getenv('DB_HOST') ?: 'localhost',
            'name' => getenv('DB_DATABASE') ?: 'testing_db',
            'user' => getenv('DB_USERNAME') ?: 'root',
            'pass' => getenv('DB_PASSWORD') ?: '',
            'port' => getenv('DB_PORT') ?: '3306',
            'charset' => 'utf8',
        ],
    ],
    'version_order' => 'creation',
];
