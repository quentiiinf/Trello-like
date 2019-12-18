<?php

namespace App\Controller;

use Core\Request;
use Core\Router\Router;
use Core\View\Html;

/**
 * Class HomeController
 * @package App\Controller
 */
class DisconnectController
{


    /**
     * @param Html $html
     * @param Request $request
     * @param Router $router
     * @return false|string
     */
    public function index(Html $html)
    {
        setcookie("username", "", time() - 3600); 
        setcookie("password", "", time() - 3600); 
        return $html->render('deco.php');
    }

}