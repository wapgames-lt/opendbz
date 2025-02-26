<?php

declare(strict_types=1);

namespace Modules\Index\Controllers;

use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final readonly class IndexController
{
    private PhpRenderer $view;

    public function __construct()
    {
        $this->view = new PhpRenderer(__DIR__ . '/../Views/');
    }

    public function index(Request $request, Response $response): Response
    {
        return $this->view->render($response, 'Index.php');
    }
}