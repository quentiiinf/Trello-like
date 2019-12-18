<?php

return [

    'config' => [
        'url_protocol' => 'http://',
        'url_domain' => 'jquery2.test',
        'url_port' => '80',
        'url_path' => '/',
        'php_errors' => true,
        'sel' => 'lkpomfd!skogfidsjpo' //Change this value for each app
    ],

    \Core\App::class => \DI\Factory(
        function($config){
            return new \Core\App($config);
        })
    ->parameter('config', \DI\get('config')),

    \Core\Session::class => \DI\Factory(
        function($session){
            return new \Core\Session($session);
        })
        ->parameter('session', $_SESSION),

    \GuzzleHttp\Psr7\ServerRequest::class => \DI\Factory(
        function(){
            return \GuzzleHttp\Psr7\ServerRequest::fromGlobals();
        })

];