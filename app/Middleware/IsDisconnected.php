<?php

namespace App\Middleware;

use Core\App;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;
use function Http\Response\send;

class IsDisconnected{


    public function __construct()
    {

    }

    public static function index(ServerRequest $request, Response $response, App $app, \Core\Router\Route $route, \Core\View\Html $html)
    {
        if (!empty($_COOKIE['username']) || !empty($_COOKIE['password'])) {

            $newUrl = $route->showPath('home');
            $response = $response->withStatus(302)->withHeader('Location', $newUrl);
            send($response);
            die();

        }
    }

}