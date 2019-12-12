<?php

$router->error404(function(\Core\View\Html $html){
   return new \GuzzleHttp\Psr7\Response('404', [], $html->render('/errors/404.php'));
});

// $router->newRoute('/framework/public/test/{{test}}', '\App\Controller\TestController@index', 'test', ['PopupExample@index']);
// $router->newRoute('/framework/public/middleware/', '\App\Controller\HomeController@index', 'test', ['IsAdmin@index']);
// $router->newRoute('/framework/public', '\App\Controller\HomeController@index', 'home');


$router->newRoute('', '\App\Controller\HomeController@index', 'home');
$router->newRoute('/login', '\App\Controller\LoginController@index', 'login');
$router->newRoute('/inscription', '\App\Controller\RegisterController@index', 'register');
$router->newRoute('/deco', '\App\Controller\DisconnectController@index', 'deco');




