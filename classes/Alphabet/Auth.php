<?php

namespace Alphabet;

class Auth {

    function __construct() {
        session_start();
        $this->setup();
    }

    private function setup() {

        if(!isset($_SESSION['isAuth'])) {

            $_SESSION['isAuth'] = false;
            $_SESSION['KCFINDER'] = array(['disabled'] => true);

        }
    }

    public function login() {

        if(!isset($_SERVER['PHP_AUTH_USER'])) {

            header('WWW-Authenticate: Basic realm="Admin Area"');
            header('HTTP/1.0 401 Unauthorized');
            die('Вы не авторизованы.');

        } else {

            if((md5($_SERVER['PHP_AUTH_USER']) === '21232f297a57a5a743894a0e4a801fc3' && md5($_SERVER['PHP_AUTH_PW']) === 'bd9570a3fd2d6cf4ca7532def9e1c88b') || $_SESSION['isAuth']) {

                if(!$_SESSION['isAuth']) {
                    $_SESSION['isAuth'] = true;
                    $_SESSION['KCFINDER']['disabled'] = false;
                    $_SESSION['ip'] = $_SERVER["SERVER_ADDR"];
                    header('location: '.(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/'));
                    exit;
                }
            }
            else {
                $this->login();
            }
        }
    }

    public function logout() {

    }

    public function isAuth() {
        return isset($_SESSION['isAuth']) ? $_SESSION['isAuth'] : false;
    }

}