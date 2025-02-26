<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return static function (App $app): void {
    $app->get('/', function (Request $request, Response $response): \Psr\Http\Message\ResponseInterface {
        $response->getBody()->write('Hello from the Index module');
        return $response;
    });
};
