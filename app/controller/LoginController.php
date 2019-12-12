<?php

namespace App\Controller;

use Core\Request;
use Core\Router\Router;
use Core\View\Html;

/**
 * Class LoginController
 * @package App\Controller
 */
class LoginController
{


    /**
     * @param Html $html
     * @param Request $request
     * @param Router $router
     * @return false|string
     */
    public function index(Html $html)
    {
        return $html->render('login.php');
    }

}