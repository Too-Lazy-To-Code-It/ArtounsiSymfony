<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    //$twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates'));
    //echo $twig->render('base.html.twig');
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);


};