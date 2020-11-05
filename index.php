<?php

require_once __DIR__.'/scripts/bootstrap.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/':
        echo $twig->render('views/index.twig');
        break;

    case '/example':
        echo $twig->render('views/example.twig');
        break;

    case '/signin':
        echo $twig->render('views/signin.twig');
        break;


    default:
        echo $twig->render('views/404.twig');
        break;
}
