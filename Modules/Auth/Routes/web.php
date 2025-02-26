<?php

use Slim\App;

return static function (App $app): void {
    // Authorization Routes
    $app->get('/register', [new \Modules\Auth\Controllers\RegisterController(), 'showForm']);
    $app->post('/register', [new \Modules\Auth\Controllers\RegisterController(), 'register']);
};
