<?php

session_start();

if(!isset($_SESSION['isAuth'])) {
    $_SESSION['isAuth'] = false;
    $_SESSION['KCFINDER'] = array();
    $_SESSION['KCFINDER']['disabled'] = true;
}

$currentPage = 'main';

if(isset($_GET['url'])) {
    $currentPage = substr($_GET['url'],1);

    if(substr($currentPage, strlen($currentPage) - 1) == '/') {
        $currentPage = substr($currentPage, 0, strlen($currentPage) - 1);
    }

    $currentPage = str_replace('/', '-', $currentPage);

    if($currentPage == 'login') {

        function auth() {
            header('WWW-Authenticate: Basic realm="Admin Area"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Вы не авторизованы.';
            exit;
        }

        if(!isset($_SERVER['PHP_AUTH_USER'])) {
            auth();
                    } else {
            if((md5($_SERVER['PHP_AUTH_USER']) === '21232f297a57a5a743894a0e4a801fc3' && md5($_SERVER['PHP_AUTH_PW']) === 'bd9570a3fd2d6cf4ca7532def9e1c88b') || $_SESSION['isAuth']) {
                if(!$_SESSION['isAuth']) {
                    $_SESSION['isAuth'] = true;
                    $_SESSION['KCFINDER']['disabled'] = false;
                    $_SESSION['ip'] = $_SERVER["SERVER_ADDR"];
                    header('location: /');
                    exit;
                }
            }
            else {
                auth();
            }
        }
    }
    else if($currentPage == 'save') {

        if(!$_SESSION['isAuth']){
            die('Вы не авторизованы.');
        }

        $page = str_replace('/', '-',str_replace('.','',isset($_POST['page']) ? $_POST['page'] : ''));
        $file = 'templates/editable/'.$page.'.html';

        if(!file_exists($file)) {
            die('Страница не найдена.');
        }

        if(!isset($_POST['content'])) {
            die('Контент не найден.');
        }

        file_put_contents($file, $_POST['content']);
        die('Страница сохранена.');
    }

    if($currentPage == '' || !file_exists('templates/'.$currentPage.'.twig') || !file_exists('templates/editable/'.$currentPage.'.html')) {
        $currentPage = 'main';
    }
}

$currentPage = strtolower($currentPage);

require_once 'vendor/autoload.php';

$twig = new Twig_Environment(new Twig_Loader_Filesystem('templates'), array(
    'cache'       => 'templates_cache',
    'auto_reload' => true
));

$template = $twig->loadTemplate("{$currentPage}.twig");

$template->display(array(
    'session' => $_SESSION,
    'currentPage' => $currentPage
));