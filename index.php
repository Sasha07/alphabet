<?php
//require_once 'vendor/autoload.php';
//
//$loader = new Twig_Loader_String();
//$twig = new Twig_Environment($loader);
//
//echo $twig->render('Hello {{ name }}!', array('name' => 'Sonic'));


$currentPage = 'main';

if(isset($_GET['url'])) {
    $currentPage = substr($_GET['url'],1);

    if(substr($currentPage, strlen($currentPage) - 1) == '/') {
        $currentPage = substr($currentPage, 0, strlen($currentPage) - 1);
    }

    $currentPage = str_replace('/', '-', $currentPage);

    if($currentPage == '' || !file_exists('templates/'.$currentPage.'.twig')) {
        $currentPage = 'main';
    }
}

$currentPage = strtolower($currentPage);

require_once 'vendor/autoload.php';
Twig_Autoloader::register();

$twig = new Twig_Environment(new Twig_Loader_Filesystem('templates'), array(
    'cache'       => 'templates_cache',
    'auto_reload' => true
));

$template = $twig->loadTemplate("{$currentPage}.twig");

$template->display(array(
    'currentPage' => $currentPage
));