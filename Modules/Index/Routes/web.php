<?php

use Slim\App;

return static function (App $app): void {
    $app->get('/', [new \Modules\Index\Controllers\IndexController(), 'index']);
};
