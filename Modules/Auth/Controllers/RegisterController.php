<?php

declare(strict_types=1);

namespace Modules\Auth\Controllers;

use Slim\Flash\Messages;
use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final readonly class RegisterController
{
    private PhpRenderer $view;

    private Messages $flash;

    public function __construct()
    {
        $this->view = new PhpRenderer(__DIR__ . '/../Views/');
        $this->flash = new Messages();
    }

    public function showForm(Request $request, Response $response): Response
    {
        return $this->view->render($response, 'Register.php');
    }

    public function register(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();

        if (empty($data['username']) || empty($data['password'])) {
            return $this->view->render($response, 'Register.php', [
                'error' => 'All fields are required!',
            ]);
        }

        $this->flash->addMessage('success', 'Registration successful!');

        password_hash((string)$data['password'], PASSWORD_DEFAULT);

        return $this->view->render($response, 'Register.php');
    }
}