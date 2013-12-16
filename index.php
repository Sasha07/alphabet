<?php

include_once 'classes/autoload.php';

$auth = new Alphabet\Auth();
$router = new Alphabet\Router($auth);

require_once 'vendor/autoload.php';

$twig = new Twig_Environment(new Twig_Loader_Filesystem('templates'), array(
    'cache'       => 'templates_cache',
    'auto_reload' => true
));

$template = $twig->loadTemplate($router->getPage().'.twig');

$template->display(array(
    'session'     => $_SESSION,
    'currentPage' => $router->getPage()
));