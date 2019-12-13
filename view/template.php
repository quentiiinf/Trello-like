<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= (isset($_content_title)) ? $_content_title : 'Liste' ?></title>

    <meta name="Description" content="<?= (isset($_content_description)) ? $_content_description : 'Super TP JQ' ?>">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="<?= $this->app->url('css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= $this->app->url('css/mdb.css') ?>" rel="stylesheet">
    <link href="<?= $this->app->url('css/style.css') ?>" rel="stylesheet">
</head>

<body>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    
    
    <a class="navbar-brand" href="<?= $this->route->showPath('home') ?>">Liste</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
    
    <?php 

    if(!empty($_COOKIE['username']) && !empty($_COOKIE['password'])) {

        ?>

        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect waves-light" href="<?= $this->route->showPath('deco') ?>">Se déconnecter de <?= $_COOKIE['username'] ?></a>
            </div>
            </li>
        </ul>

        <?php

    } else {

        ?>

        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect waves-light" href="<?= $this->route->showPath('register') ?>">S'inscrire</a>
                <a class="dropdown-item waves-effect waves-light" href="<?= $this->route->showPath('login') ?>">Se connecter</a>
            </div>
            </li>
        </ul>

        <?php

    }

    ?>

    </div>
</nav>

<?= (isset($_content_errors)) ? $_content_errors : '' ?>

<?= (isset($_content_body)) ? $_content_body : '' ?>

<script type="text/javascript" src="<?= $this->app->url('js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/mdb.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/jquery.cookie.js') ?>"></script>

<?= (isset($_content_scripts)) ? $_content_scripts : '' ?>

</body>

</html>